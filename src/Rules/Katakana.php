<?php

namespace InnovatorJapan\LaravelExtendedValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class Katakana implements Rule
{
    public function passes($attribute, $value): bool
    {
        return preg_match('/\A[ァ-ヶー　]*\z/u', $value);
    }

    public function message(): string
    {
        return __('validationRules::messages.katakana');
    }
}
