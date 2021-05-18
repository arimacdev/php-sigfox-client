<?php
namespace Arimac\Sigfox\Test\Unit;

use Arimac\Sigfox\Exception\ValidationException;
use Arimac\Sigfox\Test\Unit\Validatable\Foo;
use Arimac\Sigfox\Test\Unit\Validatable\FooParent;
use Arimac\Sigfox\Validator\Rule;
use Arimac\Sigfox\Validator\Rules\Child;
use Arimac\Sigfox\Validator\Rules\ChildSet;
use Arimac\Sigfox\Validator\Rules\Max;
use Arimac\Sigfox\Validator\Rules\MaxLength;
use Arimac\Sigfox\Validator\Rules\Min;
use Arimac\Sigfox\Validator\Rules\MinLength;
use Arimac\Sigfox\Validator\Rules\OneOf;
use Arimac\Sigfox\Validator\Rules\Required;
use Arimac\Sigfox\Validator\Validate;
use Arimac\Sigfox\Validator\Validator;
use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase {
    /**
     * @dataProvider provideRulesData
     */
    public function testRules(string $rule, $params, $value, $expected){
        /** @var Rule **/
        $rule = new $rule(...$params);
        $this->assertSame($expected, $rule->check($value));
    }

    public function provideRulesData(){
        $child = new Foo;
        $child->setBool(true);
        $child->setInt(5);
        $child->setString("aaaaa");
        $child->setRequired(3);

        return [
            [Max::class, [6], 3, true],
            [Max::class, [6], 6, true],
            [Max::class, [6], 7, false],
            [Min::class, [3], 4, true],
            [Min::class, [3], 3, true],
            [Min::class, [3], 2, false],
            [MaxLength::class, [6], str_repeat("a", 3), true],
            [MaxLength::class, [6], str_repeat("a", 6), true],
            [MaxLength::class, [6], str_repeat("a", 7), false],
            [MinLength::class, [3], str_repeat("a", 4), true],
            [MinLength::class, [3], str_repeat("a", 3), true],
            [MinLength::class, [3], str_repeat("a", 2), false],
            [Required::class, [], null, false],
            [Required::class, [], false, true],
            [Required::class, [], 0, true],
            [Required::class, [], "a", true],
            [OneOf::class, [["a", "b", "c"]], "a", true],
            [OneOf::class, [["a", "b", "c"]], "d", false],
            [OneOf::class, [[0,1,2]], 0, true],
            [OneOf::class, [[0,1,2]], 3, false],
            [Child::class, [], $child, true],
            [ChildSet::class, [], [$child, $child], true]
        ];
    }

    /**
     * @dataProvider provideChildRulesFailData
     */
    public function testChildRulesFail(string $rule, $value){
        $this->expectException(ValidationException::class);
        /** @var Rule **/
        $rule = new $rule();
        $rule->check($value);
    }

    public function provideChildRulesFailData(): array {
               $invalidChild =  new Foo;
        $invalidChild->setBool(true);
        $invalidChild->setInt(2);
        $invalidChild->setString("aa");

        return [
            [Child::class, $invalidChild],
            [ChildSet::class, [$invalidChild]]
        ];
    }

    public function testValidator(){
        
        $validChild =  new Foo;
        $validChild->setBool(true);
        $validChild->setInt(5);
        $validChild->setString("aaaaa");
        $validChild->setRequired(3); 

        Validator::validate($validChild);

        $this->expectException(ValidationException::class);
        $invalidChild =  new Foo;
        $invalidChild->setBool(true);
        $invalidChild->setInt(2);
        $invalidChild->setString("aa");
        Validator::validate($invalidChild);
    }

    /**
     * @dataProvider provideValidatorWithNestedChildsData
     */
    public function testValidatorWithNestedChilds($parent, $expectException){
        if($expectException){
            $this->expectException(ValidationException::class);
        }

        Validator::validate($parent);

        $this->assertTrue(true);
    }

    public function provideValidatorWithNestedChildsData(){
        $data = [];
        $validChild =  new Foo;
        $validChild->setBool(true);
        $validChild->setInt(5);
        $validChild->setString("aaaaa");
        $validChild->setRequired(3); 

        $this->expectException(ValidationException::class);
        $invalidChild =  new Foo;
        $invalidChild->setBool(true);
        $invalidChild->setInt(2);
        $invalidChild->setString("aa");
   
        $parent = new FooParent;
        $parent->setBool(true);
        $parent->setInt(5);
        $parent->setString("aaaaa");
        $parent->setRequired(3);
        $parent->setChilds([$validChild, $validChild, $validChild]);
        $parent->setParent($validChild);
        $data[] = [$parent, false];

        $parent2 = clone $parent;
        $parent2->setChilds([$validChild, $invalidChild]);
        $data[] = [$parent2, true];

        $parent3 = clone $parent;
        $parent3->setParent($invalidChild);
        $data[] = [$parent3, true];


        return $data;
    }
}
