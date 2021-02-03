<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\user_domicilio;

$factory->define(user_domicilio::class, function (Faker $faker) {
    return [
        'user_id' => factory(App\User::class),
        'domicilio' => $faker->streetName,
        'numero_exterior' => $faker->buildingNumber,
        'colonia' => $faker->cityPrefix ,
        'cp' => $faker->postcode,
        'ciudad' => $faker->city,
    ];
});
