<?php

namespace M1Services\DataTransferObject\Tests\Dummy;

use M1Services\DataTransferObject\Attributes\DefaultCast;
use M1Services\DataTransferObject\DataTransferObject;

#[DefaultCast(ComplexObject::class, ComplexObjectCaster::class)]
class ComplexDtoWithCast extends DataTransferObject
{
    public string $name;

    public ComplexObject $object;
}
