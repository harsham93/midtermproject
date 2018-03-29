<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = new User();
        $user->name = 'Harsha Mirani';
        $user->email = 'ham38@njit.edu';
        $user->password = 'jfidfoe';
        $this->assertTrue($user->save());
    }

}
