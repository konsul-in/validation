<?php

namespace Rakit\Validation\Rules;

use Rakit\Validation\Rule;

class Email extends Rule
{

    protected string $message = "The :attribute is not valid email";

    /**
     * Check $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check(mixed $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}
