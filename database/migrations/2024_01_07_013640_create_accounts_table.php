<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('businessName',100)->required();
            $table->enum('industry', [
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
            ])->required();
            $table->string('fullname',100)->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
