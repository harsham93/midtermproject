<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    public function testLogin()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }
    public function testAbout()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);
    }
    public function testContac()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

}
