<?php

namespace Arimac\Sigfox\Test\Unit;

use Arimac\Sigfox\Exception\DeserializeException;
use Arimac\Sigfox\Exception\SerializeException;
use Arimac\Sigfox\Serializer\ArraySerializer;
use Arimac\Sigfox\Serializer\ClassSerializer;
use Arimac\Sigfox\Serializer\PrimitiveSerializer;
use Arimac\Sigfox\Test\Unit\Serializable\DefinitionWithChild;
use Arimac\Sigfox\Test\Unit\Serializable\ExtendableDefinition;
use Arimac\Sigfox\Test\Unit\Serializable\PrimitivePropertiesDefinition;
use PHPUnit\Framework\TestCase;
use stdClass;

class Foo
{
}

class SerializerTest extends TestCase
{

    protected $values = [
        ["int", 1],
        ["int", -1],
        ["string", "a"],
        ["string", "2"],
        ["array", []],
        ["array", [1]],
        ["array", ["a"]],
        ["bool", true],
        ["bool", false],
        ["float", 12.34],
        ["float", -13.24]
    ];

    /**
     * @dataProvider providePrimitiveSerializerWithCorrectTypeData
     */
    public function testPrimitiveSerializerWithCorrectType($type, $value)
    {
        $intSerializer = new PrimitiveSerializer($type);
        $this->assertSame($value, $intSerializer->deserialize($value));
        $this->assertSame($value, $intSerializer->serialize($value));
    }

    public function providePrimitiveSerializerWithCorrectTypeData()
    {
        return $this->values;
    }

    /**
     * @dataProvider providePrimitiveSerializerWithIncorrectTypeData
     */
    public function testPrimitiveDerializeWithIncorrectType($type, $value)
    {
        $serializer = new PrimitiveSerializer($type);
        $this->expectException(DeserializeException::class);
        $serializer->deserialize($value);
    }

    /**
     * @dataProvider providePrimitiveSerializerWithIncorrectTypeData
     */
    public function testPrimitiveSerializeWithIncorrectType($type, $value)
    {
        $serializer = new PrimitiveSerializer($type);
        $this->expectException(SerializeException::class);
        $serializer->serialize($value);
    }

    public function providePrimitiveSerializerWithIncorrectTypeData()
    {
        $types = array_keys($this->values);
        $types = array_unique($types);

        $data = [];

        foreach ($types as $type) {
            foreach ($this->values as $val) {
                if ($val[0] !== $type) {
                    $data[] = [$type, $val[1]];
                }
            }
        }

        $data[] = ["array", [new Foo]];

        return $data;
    }

    public function testPrimitivePropertiesClassSerializer()
    {
        $obj = new PrimitivePropertiesDefinition();
        $obj->setAge(12);
        $obj->setHeight(12.34);
        $obj->setHobbies(["Collecting Stamps"]);
        $obj->setMarried(false);
        $obj->setName("John");
        $serializer = new ClassSerializer(PrimitivePropertiesDefinition::class);

        $serialized = [
            "name" => "John",
            "age" => 12,
            "height" => 12.34,
            "married" => false,
            "hobbies" => ["Collecting Stamps"],
        ];
        $this->assertSame($serialized, $serializer->serialize($obj));

        $this->assertInstanceOf(PrimitivePropertiesDefinition::class, $serializer->deserialize($serialized));
    }

    public function testPrimitivePropertiesJsonSerializable()
    {
        $obj = new PrimitivePropertiesDefinition();
        $obj->setAge(12);
        $obj->setHeight(12.34);
        $obj->setHobbies(["Collecting Stamps"]);
        $obj->setMarried(false);
        $obj->setName("John");

        $serialized = [
            "name" => "John",
            "age" => 12,
            "height" => 12.34,
            "married" => false,
            "hobbies" => ["Collecting Stamps"],
        ];
        $this->assertSame($serialized, json_decode( json_encode($obj), true));
    }

    public function testPrimitivePropertiesClassDeserializeWithWrongArray()
    {
        $serialized = [
            "name" => ["John"],
            "age" => "12",
            "height" => 12.34,
            "married" => false,
            "hobbies" => ["Collecting Stamps"],
        ];

        $this->expectException(DeserializeException::class);

        $serializer = new ClassSerializer(PrimitivePropertiesDefinition::class);
        $serializer->deserialize($serialized);
    }

    public function testPrimitivePropertiesClassDeserializeWithWrongObject()
    {
        $this->expectException(SerializeException::class);

        $serializer = new ClassSerializer(PrimitivePropertiesDefinition::class);
        $serializer->serialize(new stdClass);
    }

    public function testClassSerializerWithChildClassSerializer()
    {
        $serialized = [
            "name" => "John",
            "age" => 12,
            "height" => 12.34,
            "married" => false,
            "hobbies" => ["Collecting Stamps"],
            "child" => [
                "name" => "John",
                "age" => 12,
                "height" => 12.34,
                "married" => false,
                "hobbies" => ["Collecting Stamps"]
            ]
        ];

        $serializer = new ClassSerializer(DefinitionWithChild::class);
        $obj = $serializer->deserialize($serialized);
        $this->assertInstanceOf(DefinitionWithChild::class, $obj);
        $this->assertSame($serialized, $serializer->serialize($obj));
    }

    public function testClassSerializeWithChildClassSerializerWithWrongType()
    {
        $serialized = [
            "name" => "John",
            "age" => 12,
            "height" => 12.34,
            "married" => false,
            "hobbies" => ["Collecting Stamps"],
            "child" => 78
        ];

        $this->expectException(DeserializeException::class);
        $serializer = new ClassSerializer(DefinitionWithChild::class);
        $serializer->deserialize($serialized);
    }

    public function testClassSerializerWithExtendedData(){
        $serialized = [
            "name" => "John",
            "age" => 12,
            "height" => 12.34,
            "married" => false,
            "hobbies" => ["Collecting Stamps"],
            "extendedprop1"=>true
        ];

        $serializer = new ClassSerializer(ExtendableDefinition::class);
        $obj = $serializer->deserialize($serialized);
        $this->assertInstanceOf(ExtendableDefinition::class, $obj);
        $result = $serializer->serialize($obj);
        $this->assertSame($serialized, $result);
    }

    public function testClassDeserializeWithExtendedDataWrongType(){
        $serialized = [
            "name" => "John",
            "age" => 12,
            "height" => 12.34,
            "married" => false,
            "hobbies" => ["Collecting Stamps"],
            "extendedprop1"=> new Foo
        ];

        $this->expectException(DeserializeException::class);
        $serializer = new ClassSerializer(ExtendableDefinition::class);
        $serializer->deserialize($serialized);
    }

    public function testClassSerializeWithExtendedDataWrongType(){
        $obj = new ExtendableDefinition;
        $obj->set("a", new Foo); 

        $this->expectException(SerializeException::class);
        $serializer = new ClassSerializer(ExtendableDefinition::class);
        $serializer->serialize($obj);
    }

    public function testArraySerializer(){
        $item = [
            "name" => "John",
            "age" => 12,
            "height" => 12.34,
            "married" => false,
            "hobbies" => ["Collecting Stamps"]
        ];
        $items = [$item, $item, $item];
        $serializer = new ArraySerializer(new ClassSerializer(PrimitivePropertiesDefinition::class));
        $deserialized = $serializer->deserialize($items);
        $this->assertIsArray($deserialized);
        $this->assertCount(3, $deserialized);
        foreach($deserialized as $obj){
            $this->assertIsObject($obj);
            $this->assertInstanceOf(PrimitivePropertiesDefinition::class, $obj);
        }
        $serialized = $serializer->serialize($deserialized);
        $this->assertIsArray($serialized);
        $this->assertSame($items, $serialized);
    }

    public function testArrayDeserializeWithWrongType(){
        $item = [
            "name" => "John",
            "age" => 12,
            "height" => 12.34,
            "married" => false,
            "hobbies" => ["Collecting Stamps"]
        ];
        $wrongItem = $item;
        $wrongItem["age"] = "20";
        $items = [$wrongItem, $item, $item];
        $this->expectException(DeserializeException::class);
        $serializer = new ArraySerializer(new ClassSerializer(PrimitivePropertiesDefinition::class));
        $serializer->deserialize($items);
        
    }

    public function testArrayDeserializeWithNotArray(){
        $this->expectException(DeserializeException::class);
        $serializer = new ArraySerializer(new ClassSerializer(PrimitivePropertiesDefinition::class));
        $serializer->deserialize(false);
    }

    public function testArraySerializeWithWrongType()
    {
        $obj = new PrimitivePropertiesDefinition();
        $obj->setAge(12);
        $obj->setHeight(12.34);
        $obj->setHobbies(["Collecting Stamps"]);
        $obj->setMarried(false);
        $obj->setName("John");

        $obj2 = new DefinitionWithChild();
        $obj2->setAge(12);
        $obj2->setHeight(12.34);
        $obj2->setHobbies(["Collecting Stamps"]);
        $obj2->setMarried(false);
        $obj2->setName("Clark");
        $obj2->setChild($obj);

        $obj3 = clone $obj2;

        $items = [$obj2, $obj, $obj3];
        $this->expectException(SerializeException::class);
        $serializer = new ArraySerializer(new ClassSerializer(DefinitionWithChild::class));
        $serializer->serialize($items);
    }

    public function testArraySerializeWithNotArray()
    {
        $this->expectException(SerializeException::class);
        $serializer = new ArraySerializer(new ClassSerializer(DefinitionWithChild::class));
        $serializer->serialize("a");
    }
}
