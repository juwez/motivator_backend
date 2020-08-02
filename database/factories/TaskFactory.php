<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use App\User;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    $users = User::all()->pluck('id')->toArray();
    return [
        'name' => $faker->name,
        'priority' => $faker->numberBetween(1,3),
        'datetime' => $faker->dateTimeBetween('now','+30 days'),
        'completed' => $faker->boolean(),
        'user_id' => $faker->randomElement($users)
    ];
});
