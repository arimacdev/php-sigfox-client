<?php

namespace Arimac\Sigfox\Serializer;

use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Serializer\Impl\Definition;
use stdClass;

class ClassSerializer extends Serializer
{
    protected string $name;

    public function __construct(string $className, string $propertyName, string $name)
    {
        parent::__construct($className, $propertyName);
        $this->propertyName = $propertyName;
        $this->name = $name;
    }

    public function serialize($value)
    {
        if (is_null($value)) {
            return null;
        }

        if ($value instanceof $this->name) {
            return $value;
        }

        if (!is_array($value) && !($value instanceof stdClass)) {
            throw new SerializeException($this->className, $this->propertyName, $this->getParentType());
        }

        /** @var Definition **/
        $obj = new $this->name();
        $metaData = $obj->getSerializeMetaData();
        $extendable = $obj->isExtendable();

        if (is_array($value)) {
            /** @var Serializer $serializer **/
            foreach ($metaData as $propertyName => $serializer) {
                $serialized = $serializer->serialize($value[$propertyName] ?? null);
                unset($value[$propertyName]);
                $setter = "set" . ucfirst($propertyName);
                $obj->$setter($serialized);
            }
        } else if ($value instanceof stdClass) {
            /** @var Serializer $serializer **/
            foreach ($metaData as $propertyName => $serializer) {
                $serialized = $serializer->serialize($value->$propertyName ?? null);
                unset($value->$propertyName);
                $setter = "set" . ucfirst($propertyName);
                $obj->$setter($serialized);
            }
        }

        if ($extendable) {
            /** @var Extendable $obj **/
            foreach ($value as $key => $val) {
                $obj->set($key, $val);
            }
        }

        return $obj;
    }

    public function deserialize($value)
    {
        if (is_null($value)) {
            return null;
        }
        if (!is_object($value)||!($value instanceof $this->name)) {
            throw new SerializeException($this->className, $this->propertyName, $this->getParentType());
        }

        /** @var Definition $value **/
        $metaData = $value->getSerializeMetaData();
        $extendable = $value->isExtendable();
        $arr = [];

        /** @var Serializer $serializer **/
        foreach($metaData as $propertyName => $serializer){
            $getter = "get".ucfirst($propertyName);
            $deserialized = $serializer->deserialize($value->$getter());
            $arr[$propertyName] = $deserialized;
        }

        if($extendable){
            /** @var Extendable $value **/
            $data = $value->getExtendedData();
            $arr = array_merge($arr, $data);
        }

        return $arr;
    }

    protected function getType(): string
    {
        return $this->name;
    }
}
