<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGenreMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_genre', function (Blueprint $table) {
            $table->integer('film_id')->unsigned();
            $table->integer('genre_id')->unsigned();
            $table->foreign('genre_id')->references('id')->on('genres')
                ->onDelete('cascade');
            $table->foreign('film_id')->references('id')->on('films')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movie_genre', function (Blueprint $table) {

        });
    }
}
