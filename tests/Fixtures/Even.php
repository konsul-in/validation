<?php
namespace Rakit\Validation\Tests;

use Rakit\Validation\Rule;

class Even extends Rule
{

    protected string $message = "The :attribute must be even";

    public function check(mixed $value): bool
    {
        if (! is_numeric($value)) {
            return false;
        }

        return $value % 2 === 0;
    }
}
