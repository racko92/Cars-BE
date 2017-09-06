<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'mark' => $faker->name,
        'model' => $faker->name,
        'year' => $faker->year($max = 'now'),
        'maxSpeed' => $faker->numberBetween(200,500),
        'isAutomatic' => $faker->boolean($chanceOfGettingTrue = 50),
        'engine' => $faker->randomElement($array = array ('Diesel','Petrol','Gas','Hybrid')),
        'numberOfDoors' => $faker->numberBetween(1,5)
    ];
});