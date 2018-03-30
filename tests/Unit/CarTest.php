<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
Use App\Car;

class CarTest extends TestCase
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
        $this->assertTrue($user->save());
    }
}
