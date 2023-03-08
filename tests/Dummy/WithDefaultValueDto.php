<?php

namespace M1Services\DataTransferObject\Tests\Dummy;

use M1Services\DataTransferObject\DataTransferObject;

class WithDefaultValueDto extends DataTransferObject
{
    public string $name = 'John';
}
