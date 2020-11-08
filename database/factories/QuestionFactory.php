<?php

use App\Models\Poll;
use App\Models\Question;
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


$factory->define(Question::class, function (Faker $faker) {
    $poll_ids = DB::table('polls')->pluck('id')->all();

    return [
        'title' => $faker->realText(50),
        'question' => $faker->realText(500),
        'poll_id' => $faker->randomElement($poll_ids),
    ];
});
