<?php

namespace M1Services\DataTransferObject\Tests\Dummy;

use M1Services\DataTransferObject\Caster;

class RoundingCaster implements Caster
{
    public function cast(mixed $value): float | int
    {
        return is_int($value) ? $value : round($value, 2);
    }
}
