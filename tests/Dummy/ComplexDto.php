<?php

namespace M1Services\DataTransferObject\Tests\Dummy;

use M1Services\DataTransferObject\DataTransferObject;

class ComplexDto extends DataTransferObject
{
    public string $name;

    public BasicDto $other;
}
