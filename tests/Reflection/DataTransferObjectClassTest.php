<?php

namespace M1Services\DataTransferObject\Tests\Reflection;

use M1Services\DataTransferObject\DataTransferObject;
use M1Services\DataTransferObject\Reflection\DataTransferObjectClass;
use M1Services\DataTransferObject\Tests\TestCase;

class DataTransferObjectClassTest extends TestCase
{
    /** @test */
    public function test_public_properties()
    {
        $dto = new class () extends DataTransferObject {
            public $foo;

            public static $bar;

            private $baz;

            protected $boo;
        };

        $class = new DataTransferObjectClass($dto);

        $this->assertCount(1, $class->getProperties());
        $this->assertEquals('foo', $class->getProperties()[0]->name);
    }
}
