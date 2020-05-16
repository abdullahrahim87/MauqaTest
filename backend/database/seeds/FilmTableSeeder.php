<?php
use Illuminate\Database\Seeder;


class FilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 10 users using the user factory
        factory(App\Film::class, 3)->create()->each(function (\App\Film $film) {
            $film->comments()->save(factory(App\Comment::class)->make());
            $film->genres()->attach(
                \App\Genre::all()
            );


        });


    }
}
