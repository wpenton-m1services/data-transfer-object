<?php

namespace M1Services\DataTransferObject\Tests;

use M1Services\DataTransferObject\Attributes\CastWith;
use M1Services\DataTransferObject\DataTransferObject;
use M1Services\DataTransferObject\Tests\Dummy\ComplexObject;
use M1Services\DataTransferObject\Tests\Dummy\ComplexObjectCaster;

class CasterOnPropertyTest extends TestCase
{
    /** @test */
    public function property_is_casted()
    {
        $dto = new class (complexObject: [ 'name' => 'test' ]) extends DataTransferObject {
            #[CastWith(ComplexObjectCaster::class)]
            public ComplexObject $complexObject;
        };

        $this->assertEquals('test', $dto->complexObject->name);
    }
}
