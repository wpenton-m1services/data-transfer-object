<?php

namespace M1Services\DataTransferObject\Tests\Casters;

use Exception;
use M1Services\DataTransferObject\Attributes\CastWith;
use M1Services\DataTransferObject\Caster;
use M1Services\DataTransferObject\DataTransferObject;
use M1Services\DataTransferObject\Tests\TestCase;

class ArrayCasterTest extends TestCase
{
    /** @test */
    public function test_collection_caster()
    {
        $bar = new Bar([
            'collectionOfFoo' => [
                ['name' => 'a'],
                ['name' => 'b'],
                ['name' => 'c'],
            ],
        ]);

        $this->assertCount(3, $bar->collectionOfFoo);
    }
}

class Bar extends DataTransferObject
{
    /** @var \Spatie\DataTransferObject\Tests\Foo[] */
    #[CastWith(FooArrayCaster::class)]
    public array $collectionOfFoo;
}

class Foo extends DataTransferObject
{
    public string $name;
}

class FooArrayCaster implements Caster
{
    public function cast(mixed $value): array
    {
        if (! is_array($value)) {
            throw new Exception("Can only cast arrays to Foo");
        }

        return array_map(
            fn (array $data) => new Foo(...$value),
            $value
        );
    }
}
