<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Account;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AccountFactory extends Factory
{
    protected $model = Account::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'businessName'=>$this->faker->company(),
            'industry'=>$this->faker->randomElement([
                'Medicina','Veterinaria','Agencia de Marketing','Asesorías y Cursos',
                'Tienda de ropa y accesorios','Centros de belleza','Tienda de cosméticos',
                'Juguetería','Supermercado','Restaurante','Pastelerías y panaderías',
                'Tienda de electrodomésticos','Librería','Concesionarios','Otros'
            ]),
            'fullname'=>$this->faker->name(),
            //
        ];
    }
}
