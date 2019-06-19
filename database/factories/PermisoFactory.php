<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\models\Permiso;
use Faker\Generator as Faker;

$factory->define(Permiso::class, function (Faker $faker) {
    return [
        // tipos de faker https://github.com/fzaninotto/faker

        'nombre' => $faker->name,
        'slug' => $faker->word,
    ];
});
