<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarYearTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testYear()

    {
        $car = Car::find(1);
        $year = (int) $car->Year;
        $this->assertInternalType("int", $year);
    }

}
