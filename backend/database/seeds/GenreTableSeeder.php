<?php
use Illuminate\Database\Seeder;


class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 10 users using the user factory

        DB::table('genres')->insert([
            'title' => "Action"
        ]);


        DB::table('genres')->insert([
            'title' => "Thriller"
        ]);

        DB::table('genres')->insert([
            'title' => "Comedy"
        ]);

    }
}
