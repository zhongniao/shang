<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Status::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'content' => $faker->text(),
        'user_id' => $faker->numberBetween(1, 5),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
