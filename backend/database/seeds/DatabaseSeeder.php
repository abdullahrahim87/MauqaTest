<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        // Register the user seeder
        $this->call(UsersTableSeeder::class);
        $this->call(GenreTableSeeder::class);
        $this->call(FilmTableSeeder::class);

        Model::reguard();
        // $this->call(UsersTableSeeder::class);
    }
}
