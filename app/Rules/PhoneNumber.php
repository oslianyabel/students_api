<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumber implements Rule
{
    public function passes($attribute, $value)
    {
        // Agrega aquí la lógica de validación del número de teléfono
        return preg_match('/^\d{10}$/', $value);
    }

    public function message()
    {
        return 'The phone field must be a 10-digit number.';
    }
}
