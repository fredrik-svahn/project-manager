<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserAddressControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_updating_a_users_address_should_show_latest()
    {
        $this->post("/user")->j


        $response = $this->post('/user');
        $response->assertStatus(200);
    }
}
