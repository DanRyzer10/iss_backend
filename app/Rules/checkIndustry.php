<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
class checkIndustry implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    protected $industries;
    public function __construct()
    {
        $this->industries = [
            "Medicina",
            "Veterinaria",
            "Agencia de Marketing",
            "Asesorías y Cursos",
            "Tienda de ropa y accesorios",
            "Centros de belleza",
            "Tienda de cosméticos",
            "Juguetería",
            "Supermercado",
            "Restaurante",
            "Pastelerías y panaderías",
            "Tienda de electrodomésticos",
            "Librería",
            "Concesionarios",
            "Otros"
        ];
        //
    }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //poner la primera letra en mayuscula
        $value = ucfirst($value);
        if(!in_array($value, $this->industries)){
            $fail("The $attribute must be a valid industry");
        }
        //
    }
}
