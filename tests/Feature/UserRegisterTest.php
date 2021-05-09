<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */


    //use RefreshDatabase;

    public function test_registerUser()
    {
        $email = 'testuser@test.com';
        $this->post(route('register'), [
            'name' => 'testuser',
            'email' => $email,
            'password' => '12345678',
            'password_confirmation' => '12345678',
            'prefecture' => 'tokyo',
            'address1' => 'tokyo',
            'address2' => 'tokyo',
            'address3' => 'tokyo',
            'phone' => '001002003',
        ])
        ->assertStatus(302);
        $this->assertDatabaseHas('users', ['email' => $email]);
    }
}
