<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Account;

class AccountTest extends TestCase
{
    use RefreshDatabase;

    public function testStoreValidData()
    {
        $data = [
            'nombre del negocio' => 'Test Business',
            'industria' => 'Medicina',
            'nombres y apellidos' => 'Test Name'
        ];

        $response = $this->postJson('/api/accounts', $data);

        $response->assertStatus(201);
        $response->assertJson(['message' => 'Great success! New account created']);
        $this->assertDatabaseHas('accounts', $data);
    }

    public function testStoreInvalidData()
    {
        $data = [
            'nombre del negocio' => '',
            'industria' => '',
            'nombres y apellidos' => ''
        ];

        $response = $this->postJson('/api/accounts', $data);

        $response->assertStatus(422);
    }
}