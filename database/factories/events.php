<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\class_events;
use Faker\Generator as Faker;

$factory->define(class_events::class, function (Faker $faker) {
    return [
        //
        'trainer'=> rand(1,4),
        'venue' => $faker->company,
        'services_id' => rand(1,8),
        'title' => $faker->name,
        'desc' => $faker->text,
        'cost' => $faker->randomDigit,
        'classOrEvent' => 'Class',
        'start'=> now()->addDays(rand(-1,7)),
        'finish'=> now()->addDays(rand(-1,7)),
        'created_at' => now()->addDays(rand(1,30)),
        'status' => 'Active',
    ];
});


//Str::random(10)