<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_genre', function (Blueprint $table) {
          $table->integer('event_id')->unsigned();
          $table->integer('genre_id')->unsigned();

          $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
          $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');

          $table->primary(['event_id','genre_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_genre');
    }
}
