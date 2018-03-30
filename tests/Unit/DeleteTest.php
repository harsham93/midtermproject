<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDelete()
    {
        $user = new User();
        $user->name = 'Harsha Mirani';
        $user->email = 'ham38@njit.edu';
        $user->password = 'jfidfoe';
        $user->save();
        $this->assertTrue($user->delete());
    }
}
