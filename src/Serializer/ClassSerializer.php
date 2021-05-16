<?php

namespace Arimac\Sigfox\Serializer;

use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Serializer\Impl\Definition;
use stdClass;

/**
 * Serializing and deserializing class instances
 */
class ClassSerializer implements Serializer
{
    protected string $className;

    /**
     * Initializing the serializer
     *
     * @param string $className The class name
     */
    public function __construct(string $className)
    {
        $this->className = $className;
    }

    /**
     * @inheritdoc
     */
    public function deserialize($value)
    {
        if (is_null($value)) {
            return null;
        }

        if (is_object($value) && $value instanceof $this->className) {
            return $value;
        }

        /** @var Definition **/
        $obj = new $this->className();
        $metaData = $obj->getSerializeMetaData();

        if (!is_array($value) && !(is_object($value)&&$value instanceof stdClass)) {
            throw new DeserializeException(
                [$this->className, "array(".implode(",",array_keys($metaData)).")"],
                is_array($value)? "array(".implode(",", array_keys($value)).")": gettype($value)
            );
        }

        /** @var Definition **/
        $obj = new $this->className();
        $metaData = $obj->getSerializeMetaData();
        $extendable = $obj->isExtendable();

        if (is_array($value)) {
            /** @var Serializer $serializer **/
            foreach ($metaData as $propertyName => $serializer) {
                $serialized = $serializer->deserialize($value[$propertyName] ?? null);
                unset($value[$propertyName]);
                $setter = "set" . ucfirst($propertyName);
                $obj->$setter($serialized);
            }
        } else if ($value instanceof stdClass) {
            /** @var Serializer $serializer **/
            foreach ($metaData as $propertyName => $serializer) {
                $serialized = $serializer->deserialize($value->$propertyName ?? null);
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

    /**
     * @inheritdoc
     */
    public function serialize($value)
    {
        if (is_null($value)) {
            return null;
        }
        if (!is_object($value)||!($value instanceof $this->className)) {
            throw new SerializeException([$this->className], is_object($value)? get_class($value): gettype($value));
        }

        /** @var Definition $value **/
        $metaData = $value->getSerializeMetaData();
        $extendable = $value->isExtendable();
        $arr = [];

        /** @var Serializer $serializer **/
        foreach($metaData as $propertyName => $serializer){
            $getter = "get".ucfirst($propertyName);
            $deserialized = $serializer->serialize($value->$getter());
            $arr[$propertyName] = $deserialized;
        }

        if($extendable){
            /** @var Extendable $value **/
            $data = $value->getExtendedData();
            $arr = array_merge($arr, $data);
        }

        return $arr;
    }
}
