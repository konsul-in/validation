<?php

namespace Rakit\Validation\Rules;

use Rakit\Validation\Rule;

class Boolean extends Rule
{
    protected string $message = "The :attribute must be a boolean";

    /**
     * Check the value is valid
     *
     * @param mixed $value
     * @return bool
     * @throws \Exception
     */
    public function check(mixed $value): bool
    {
        return \in_array($value, [\true, \false, "true", "false", 1, 0, "0", "1", "y", "n"], \true);
    }
}
