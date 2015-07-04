<?php

namespace JamalTest\EntityTrait;

use PHPUnit_Framework_TestCase;

class EntityTraitTest extends PHPUnit_Framework_TestCase
{
    public function testPassingVoidArrayReturnEmptyEntity()
    {
        $expected = new \Jamal\EntityTrait\Example();

        $this->assertEquals(
            $expected,
            $expected->exchangeArray(array())
        );
    }

    public function testPassingNonexistentDataArrayReturnEmptyEntity()
    {
        $expected = new \Jamal\EntityTrait\Example();

        $this->assertEquals(
            $expected,
            $expected->exchangeArray(array('foo' => 'bar'))
        );
    }

    public function testPassingFullDataArrayReturnPopulatedEntity()
    {
        $expected = new \Jamal\EntityTrait\Example();
        $expected->id = 1;
        $expected->name = 'jamal';
        $expected->age = 25;
        $expected->phone = '11 3030-3030';

        $example = new \Jamal\EntityTrait\Example();
        $example->exchangeArray(
            array(
                'id'    => 1,
                'name'  => 'jamal',
                'age'   => 25,
                'phone' => '11 3030-3030'
            )
        );

        $this->assertEquals($expected, $example);
    }
}
