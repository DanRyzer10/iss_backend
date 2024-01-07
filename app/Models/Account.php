<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre del negocio',
        'industria',
        'nombres y apellidos'
    ];
    protected $enum = [
        'industria' => [
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
        ]
    ];

    public static function getEnum(){
        return static::$enum;
    }
}
