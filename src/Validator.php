<?php

namespace M1Services\DataTransferObject;

use M1Services\DataTransferObject\Validation\ValidationResult;

interface Validator
{
    public function validate(mixed $value): ValidationResult;
}
