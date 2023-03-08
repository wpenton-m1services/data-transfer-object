<?php

namespace M1Services\DataTransferObject\Tests\Dummy;

use M1Services\DataTransferObject\Attributes\CastWith;

#[CastWith(ComplexObjectWithCasterCaster::class)]
class ComplexObjectWithCaster
{
    public function __construct(
        public string $name,
    ) {
    }
}
