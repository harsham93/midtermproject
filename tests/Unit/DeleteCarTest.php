<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsert()
    {
        $user = new Car();
        $user->make = 'honda';
        $user->model = 'abcd';
        $user->year = '2018';
        $user->save();
        $this->assertTrue($user->delete());
    }
}
