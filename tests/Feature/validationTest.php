<?php

namespace Tests\Feature;

use App\Rules\checkIndustry;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class validationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testCheckValidator(){
        $rule = ["industry"=>["required", new checkIndustry()]];
        $passData = ["industry"=>"Medicina"];
        $failData = ["industry"=>"cualquier cosa"];

        $passValidator = Validator::make($passData, $rule);
        $failValidator = Validator::make($failData, $rule);

        $this->assertTrue($passValidator->passes());
        $this->assertFalse($failValidator->passes());
    }
}
