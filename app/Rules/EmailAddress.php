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
        return 'El campo de correo electrónico debe ser una dirección de correo válida.';
    }
}
