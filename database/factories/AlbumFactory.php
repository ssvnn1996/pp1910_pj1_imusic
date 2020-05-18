<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'name' =>$faker->word,
        'singer_id' => App\Models\Singer::all()->random()->id,
        //
    ];
});
