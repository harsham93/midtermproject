<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

        public function testUpdate()
    {
        $user = User::find(1);
        $user->name = 'Steve Smith';
        $user->password = 'jfidfoe';
        $this->assertTrue($user->save());
    }

}
