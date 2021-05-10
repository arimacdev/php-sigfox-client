<?php

namespace Arimac\Sigfox\GenCode;

use PhpParser\Builder\Namespace_;
use PhpParser\Builder\Class_ as BuilderClass_;
use PhpParser\BuilderFactory;
use PhpParser\BuilderHelpers;
use PhpParser\Node\Const_;
use PhpParser\Node\Expr;
use PhpParser\Node\NullableType;
use PhpParser\Node\Stmt\Class_ as StmtClass_;
use PhpParser\Node\Stmt\ClassConst;
use PhpParser\PrettyPrinter;

class Class_
{

    /** @var BuilderFactory **/
    protected $factory;

    /** @var Namespace_ **/
    protected $namespace;

    /** @var BuilderClass_ **/
    protected $class;

    protected $name;

    protected $namespaceName;

    protected $uses = [];

    public function __construct(string $namespaceName, string $name, ?string $docComment = null)
    {
        $this->factory = new BuilderFactory;
        $this->namespaceName = $namespaceName;
        $this->namespace = $this->factory->namespace($namespaceName);
        $this->class = $this->factory->class($name);
        $this->name = $name;
        if ($docComment) {
            $this->class->setDocComment($docComment);
        }
    }

    public function getContents(): string
    {

        $this->namespace->addStmt($this->class);
        $node = $this->namespace->getNode();
        $stmts = array($node);
        $prettyPrinter = new PrettyPrinter\Standard();
        return $prettyPrinter->prettyPrintFile($stmts);
    }

    public function getClassName(): string
    {
        return $this->name;
    }

    protected function addUseStmt(string $use)
    {
        if (!in_array($use, $this->uses)) {
            $this->namespace->addStmt(
                $this->factory->use($use)
            );
            array_push($this->uses, $use);
        }
    }

    public function useType(string $type): string
    {
        $isArray = substr($type, strlen($type) - 2) === "[]";
        $isGeneric = substr($type, strlen($type) - 1) === ">";
        // has a namespace
        if ($isArray) {
            $slices = explode("\\", $type);
            if (count($slices) > 1) {
                $arrayName = array_pop($slices);
                $className = substr($arrayName, 0, strlen($arrayName) - 2);

                $namespace = implode("\\", $slices);

                if ($namespace !== $this->namespaceName) {
                    $this->addUseStmt($namespace . "\\" . $className);
                }

                return $arrayName;
            } else {
                return $type;
            }
        } else if ($isGeneric) {
            $slices = explode("<", $type, 1);
            $parentType = $slices[0];
            $childType = substr($slices[1], 0, strlen($slices[1]) - 1);

            $slices = explode("\\", $parentType);
            if (count($slices)) {
                $className = array_pop($slices);

                $namespace = implode("\\", $slices);

                if ($namespace !== $this->namespaceName) {
                    $this->addUseStmt($namespace . "\\" . $className);
                }

                $parentType = $className;
            }

            $childType = $this->useType($childType);

            return "$parentType<$childType>";
        } else {
            $slices = explode("\\", $type);
            if (count($slices) > 1) {
                $className = array_pop($slices);

                $namespace = implode("\\", $slices);

                // the type is not a sibiling. So give a warm 
                // welcome to this guest type
                if ($namespace !== $this->namespaceName) {
                    $this->addUseStmt($namespace . "\\" . $className);
                }

                return $className;
            } else {
                return $type;
            }
        }
    }

    public function extend(string $name)
    {
        $type = $this->useType($name);
        if (in_array($type, $this->forceTraits)) {
            $this->class->addStmt($this->factory->useTrait($type));
        } else {
            $this->class->extend($type);
        }
    }

    public function getNamespace(): string
    {
        return $this->namespaceName;
    }

    public function save()
    {
        $namespaceSlices = explode("\\", $this->namespaceName);
        array_shift($namespaceSlices);
        array_shift($namespaceSlices);
        $dir = dirname(__DIR__) . "/../src/";
        foreach ($namespaceSlices as $folder) {
            $dir .= $folder . "/";
            @mkdir($dir);
        }
        file_put_contents($dir . $this->getClassName() . ".php", $this->getContents());
    }

    public function addProperty(
        string $name,
        string $type,
        ?string $docComment = null,
        $value = null
    ) {
        $property = $this->factory->property($name);
        $property->makeProtected();
        if($value){
            $property->setDefault($value);
        }
        $property->setType(new NullableType($type));
        if ($docComment) {
            $property->setDocComment($docComment);
        }
        $this->class->addStmt($property);
    }

    public function addConst(string $name, $value, ?string $docComment = null)
    {
        $attributes = [];
        if ($docComment) {
            $attributes["comments"] = [BuilderHelpers::normalizeDocComment($docComment)];
        }
        $const = new Const_($name, BuilderHelpers::normalizeValue($value));
        $classConst = new ClassConst(
            [$const],
            StmtClass_::MODIFIER_PUBLIC,
            $attributes
        );
        $this->class->addStmt($classConst);
    }

    public function addMethod(
        string $name,
        array $params,
        $stmts,
        ?string $returnType = null,
        ?string $docComment = null
    ) {
        $method = $this->factory->method($name);
        $method->makePublic();
        $method->addParams($params);
        if ($returnType) {
            $method->setReturnType($returnType);
        }
        $method->addStmts($stmts);
        if ($docComment) {
            $method->setDocComment($docComment);
        }
        $this->class->addStmt($method);
    }

    protected function setArrayProperty(string $propertyName, array $items)
    {
        $property = $this->factory->property($propertyName);
        $property->setDefault($items);
        $property->makeProtected();
        $this->class->addStmt($property);
    }

    public function setSerialize(array $serialize){
        $this->setArrayProperty(
            "serialize", 
            array_map(
                function($i){
                    return $this->factory->classConstFetch($i,"class");
                },
                $serialize
            ));
    }
}
