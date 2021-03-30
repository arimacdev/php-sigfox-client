<?php

namespace Arimac\Sigfox\GenCode;

use PhpParser\BuilderFactory;
use PhpParser\PrettyPrinter;

class ClassExt {

    /** @var BuilderFactory **/
    protected $factory;

    /** @var Namespace_ **/
    protected $namespace;

    /** @var Class_ **/
    protected $class;

    protected $name;

    protected $namespaceName;

    public function __construct(string $namespaceName, string $name, ?string $description = null)
    {
        $this->factory = new BuilderFactory;
        $this->namespaceName = $namespaceName;
        $this->namespace = $this->factory->namespace($namespaceName);
            $this->class = $this->factory->class($name);
        $this->name = $name;
        if ($description) {
            $this->class->setDocComment($this->formatDocComment("class", $description));
        }
    }

    protected function formatDocComment(
        string $type,
        ?string $message=null,
        $docCommentParams = [],
        ?string $name = null
    ): string {
        if($message){
            $lines = explode("\n", trim( $message));
            $formatted = implode("\n * ", $lines);
            $formatted = "/**\n * $formatted\n";
            if(count($docCommentParams)){
                $formatted .= " *\n";
            }
        } else {
            $formatted = "/**\n";
        }

        if (count($docCommentParams) > 0) {
            foreach ($docCommentParams as $comment) {
                $formatted .= " * @" . $comment[0] . " " . $comment[1] . "\n";
            }
        }

        return $formatted . " */";
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

    public function addUse($namespace, $name)
    {
        $this->namespace->addStmt($this->factory->use("$namespace\\" . $name));
    }

    public function extend(string $namespace, string $name)
    {
        $this->addUse($namespace, $name);
        if (in_array($name, $this->forceTraits)) {
            $this->class->addStmt($this->factory->useTrait($name));
        } else {
            $this->class->extend($name);
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

    public function addProperty(string $name, string $type, ?string $message=null)
    {
        $property = $this->factory->property($name);
        $property->setType($type);
        if ($message) {
            $property->setDocComment($this->formatDocComment("property", $message, [["var", $type]], $name));
        } else {
            $property->setDocComment("/** @var $type */");
        }
        $property->makeProtected();
        $this->class->addStmt($property);
    }
}
