<?php

use App\Models\Answer;
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

$factory->define(Answer::class, function (Faker $faker) {
    $question_ids = DB::table('questions')->pluck('id')->all();

    return [
        'answer' => $faker->realText(500),
        'question_id' => $faker->randomElement($question_ids),
    ];
});
