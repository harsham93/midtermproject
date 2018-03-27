<?php
/**
 * Created by PhpStorm.
 * User: harsha
 * Date: 3/25/18
 * Time: 5:37 PM
 */


use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement($array = array("ford", "honda", "toyota")),
        'model' => $faker->text,
        'year' => $faker->year,

    ];
});