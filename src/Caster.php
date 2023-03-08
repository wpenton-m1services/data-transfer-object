<?php

namespace M1Services\DataTransferObject;

interface Caster
{
    public function cast(mixed $value): mixed;
}
