<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class AdminTest extends TestCase
{
    use RefreshDatabase;
  
     public function test_login_form()
    {
       
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    
    public function valid_cred()
    {
        $admin = \App\Models\Admin::factory()->create();

        $response = $this->post('/login', [
            'username' => $admin->username,
            'password' => 'password', 
        ]);

        $response->assertRedirect('/dashboard'); 
        $this->assertAuthenticatedAs($admin);
    }

    public function invalid_cred(){

        $admin = \App\Models\Admin::factory()->create();

        $response = $this->post('/login',[

            'username' => $admin->username,
            'password' => 'wrong password',

        ]);
        $response->assertInvalidCredentials();
       

    }
}
