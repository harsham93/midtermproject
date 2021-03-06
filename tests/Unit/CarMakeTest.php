<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMakeCar()
    {
        $car = Car::find(1);
        $this->assertContains($car->make,["ford", "toyota" ,"honda"]);
    }
}
