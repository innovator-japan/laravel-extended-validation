<?php

namespace InnovatorJapan\LaravelExtendedValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class Katakana implements Rule
{
    public function passes($attribute, $value)
    {
        // TODO: Implement passes() method.
        return $value === 'hoge';
    }

    public function message()
    {
        // TODO: Implement message() method.
        return 'The :attribute must be uppercase.';
    }
}
