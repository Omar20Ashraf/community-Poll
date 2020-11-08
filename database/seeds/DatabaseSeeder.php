<?php

use App\Models\Answer;
use App\Models\Poll;
use App\Models\Question;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create();
        factory(Poll::class, 10)->create();
        factory(Question::class, 50)->create();
        factory(Answer::class, 500)->create();
    }
}
