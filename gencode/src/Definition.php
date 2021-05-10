<?php

namespace Arimac\Sigfox\GenCode;

use Arimac\Sigfox\GenCode\Config\EnumFields;
use PhpParser\BuilderFactory;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\NullableType;
use PhpParser\Node\Stmt\Return_;

class Definition extends Class_
{
    protected $getter = true;

    protected $forceTraits = [
        "BillableGroup",
        "CallbackEmail",
        "GroupCallbackEmail",
        "ProfileIds",
        "SingleDeviceFields",
        "Extendable"
    ];

    protected static $aliases = [
        "Action"=> "string",
        "Actions"=> "string[]",
        "Resource"=> "string[]",
        "Resources"=> "string[]"
    ];

    public function __construct(string $namespaceName, string $name, ?string $docComment = null)
    {
        $this->factory = new BuilderFactory;
        $this->namespaceName = $namespaceName;
        $this->namespace = $this->factory->namespace($namespaceName);
        if (in_array($name, $this->forceTraits)) {
            $this->class = $this->factory->trait($name);
        } else {
            $this->class = $this->factory->class($name);
            $this->extend("Arimac\\Sigfox\\Definition");
        }
        $this->name = $name;
        if ($docComment) {
            $this->class->setDocComment($docComment);
        }
    }

    public function setRequired(array $required)
    {
        $this->setArrayProperty("required", $required);
    }

    public function setObjects(array $objects)
    {
        $this->setArrayProperty("objects", $objects);
    }

    public function addSetter(
        string $type,
        string $propertyName,
        ?string $docComment = null
    ) {
        $assignment = new Assign(new Variable("this->$propertyName"), new Variable("$propertyName"));
        $ret = new Return_(new Variable("this"));

        $param = $this->factory->param($propertyName);
        $param->setType(new NullableType($type));

        $this->addMethod("set" . ucfirst($propertyName), [$param], [$assignment, $ret], "self", $docComment);
    }

    public function addGetter(
        string $type,
        string $propertyName,
        ?string $docComment = null
    ) {
        $ret = new Return_(new Variable("this->$propertyName"));
        $this->addMethod("get" . ucfirst($propertyName), [], [$ret], $type, $docComment);
    }

    public function extend(string $name){
        $name = $this->useType($name);
        if(in_array($name, $this->forceTraits)){
            $useTrait = $this->factory->useTrait($name);
            $this->class->addStmt($useTrait);
        } else {
            $this->class->extend($name);
        }
    }

    public function addProperty(string $name, string $type, ?string $docComment = null, $value=null)
    {
        parent::addProperty($name,$type,$docComment, $this->factory->val(null));
    }

    public static function fromArray(string $name, array $definition): string
    {
        $slices = explode("\\", $name);
        $className = array_pop($slices);
        $namespace = implode("\\", $slices);

        $properties = [];
        $extends = [];
        $extendable = false;

        if (isset($definition["type"])&&!isset($definition["allOf"])) {
            switch ($definition["type"]) {
                case "object":
                    $properties = $definition["properties"];
                    break;
                case "array":
                    if (isset($definition["items"])) {
                        $item = static::fromArray($name . "Item", $definition["items"]);
                        return $item . "[]";
                    }
                    return "array";
                case "string":
                    return "string";
                case "number":
                    if (isset($definition["format"]) && $definition["format"] == "float") {
                        return "float";
                    } else {
                        return "int";
                    }
                case "boolean":
                    return "bool";
                case "integer";
                    return "int";
            }
        } else if (isset($definition["allOf"])) {
                foreach ($definition["allOf"] as $allOf) {
                    if (isset($allOf["type"])) {
                        if ($allOf["type"] === "object" && isset($allOf["properties"])) {
                            $properties = array_merge($properties, $allOf["properties"]);
                        } else if($allOf["type"]==="object") {
                            $extendable = true;

                        }
                    } else if (isset($allOf["\$ref"])) {
                        array_push($extends, $allOf["\$ref"]);
                    }
                }
        } else if (isset($definition["\$ref"])){
            $defClassName = Helper::defToName($definition["\$ref"]);
            if(isset(self::$aliases[$defClassName])){
                return self::$aliases[$defClassName];
            }
            return "Arimac\\Sigfox\\Definition\\".$defClassName;
        } else if (isset($definition["schema"])&&isset($definition["schema"]["\$ref"])){
            $defClassName = Helper::defToName($definition["schema"]["\$ref"]);
            if(isset(self::$aliases[$defClassName])){
                return self::$aliases[$defClassName];
            }
            return "Arimac\\Sigfox\\Definition\\".$defClassName;
        }
        
        if(count($extends)===1&&empty($properties)&&!$extendable){
            $className = Helper::defToName($extends[0]);
            return "Arimac\\Sigfox\\Definition\\".$className;
        }

        if(empty($properties)&&empty($extends)){
            return "array";
        }
        
        $defClass = new static(
            $namespace,
            $className,
            isset($definition["description"]) ? Helper::normalizeDocComment($definition["description"]) : null
        );

        $serialize = [];

        foreach($properties as $propertyName=> $property){
            $type = Definition::fromArray($name."\\".ucfirst($propertyName), $property);
            $usedType = $defClass->useType($type);
            $phpType = Helper::toPHPValue($usedType);

            // PHP8 Only
            if(
                str_starts_with($type,  "Arimac\\Sigfox")&&
                !in_array(substr($type, strlen($type)-1),["]",">"])
            ){
                $serialize[$propertyName] =  $phpType;
            }

            $description = null;
            if(isset($property["description"])){
                $description = $property["description"];
                $lines = explode("\n",$description);
                $fieldsLines = array_filter($lines, function($line){
                    return substr_count($line,"->");
                });
                if(count($fieldsLines)){
                    $constants = EnumFields::getConstants($name, $propertyName, $description);
                    if($constants){
                        $constPrefix = Helper::camelToUnderscore($propertyName);
                        $usedType =str_replace("int", "self::".$constPrefix."_*", $usedType);
                        foreach($constants as $constName=>$attr){
                            if($constName==="comment"){
                                $description = $attr;
                            } else {
                                $defClass->addConst(
                                    $constPrefix."_".$constName, 
                                    $attr["value"], 
                                    isset($attr["comment"])?Helper::normalizeDocComment($attr["comment"],2):null
                                );
                            }
                        }
                    }
                }

            }

            $defClass->addProperty(
                $propertyName, 
                $phpType, 
                Helper::normalizeDocComment(
                    $description,
                    [["var", $usedType ]],
                    2
                )
            );
            $defClass->addSetter(
                $phpType,
                $propertyName,
                Helper::normalizeDocComment(
                    "Setter for $propertyName",
                    [
                        ["param", $usedType, "\$$propertyName", $description ],
                        ["return", "self", "To use in method chains"]
                    ],
                    2
                )
            );
            $defClass->addGetter(
                $phpType,
                $propertyName,
                Helper::normalizeDocComment(
                    "Getter for $propertyName",
                    [["return", $usedType, $description ]],
                    2
                )
            );
        }

        foreach($extends as $extend){
            $className = Helper::defToName($extend);
            $defClass->extend("Arimac\\Sigfox\\Definition\\".$className);
        }

        if($extendable){
            $defClass->extend("Arimac\\Sigfox\\Extendable");
        }

        if(count($serialize)){
            $defClass->setSerialize($serialize);
        }

        $defClass->save();

        return $name;
    }
}
