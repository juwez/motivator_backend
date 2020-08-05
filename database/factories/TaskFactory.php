<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use App\User;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    $users = User::all()->pluck('email')->toArray();
    return [
        'name' => $faker->name,
        'priority' => $faker->numberBetween(1,3),
        'datetime' => $faker->dateTimeBetween('now','+30 days'),
        'completed' => $faker->boolean(),
        'email' => $faker->randomElement($users)
    ];
});
