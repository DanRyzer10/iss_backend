<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
class AccountTest extends TestCase
{
    use RefreshDatabase;

    public function testStoreValidData()
    {
        $data = [
            'businessName' => 'Test Business',
            'industry' => 'Medicina',
            'fullname' => 'Test Name'
        ];

        $response = $this->postJson('/api/accounts', $data);

        $response->assertStatus(201);
        $response->assertJson(['message' => 'Great success! New account created']);
        $this->assertDatabaseHas('accounts', $data);
    }

    public function testStoreInvalidData()
    {
        $data = [
            'businessName' => '',
            'industry' => '',
            'fullname' => ''
        ];

        $response = $this->postJson('/api/accounts', $data);

        $response->assertStatus(400);
    }
}