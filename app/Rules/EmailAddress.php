<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class EmailAddress implements Rule
{
    public function passes($attribute, $value)
    {
        // Agrega aquí la lógica de validación del correo electrónico
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }

    public function message()
    {
        return 'The email field must be a valid email address.';
    }
}
