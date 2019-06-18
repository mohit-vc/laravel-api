<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

/**
 * Class AuthenticateControllerTest
 * @package Tests\Feature
 */
class AuthenticateControllerTest extends TestCase
{
    /**
     * test a user can login with correct credentials
     * @return void
     */
    public function test_a_user_can_login_with_correct_credentials()
    {
        $user = factory(User::class)->create();
        $response = $this->post('/api/auth/login', [
            'email' => $user->email,
            'password' => '12345678'
        ]);
        $response->assertStatus(202)
            ->assertJsonStructure(['data'=> ['user_details','token']]);
    }

    /**
     * test a user can not login with incorrect credentials
     */
    public function test_a_user_can_not_login_with_incorrect_credentials()
    {
        $user = factory(User::class)->create();
        $response = $this->post('/api/auth/login', [
            'email' => $user->email,
            'password' => '12345677'
        ]);
        $response->assertStatus(401);
    }
}
