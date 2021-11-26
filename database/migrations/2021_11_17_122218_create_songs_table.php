<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedInteger('genre_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->on('users')->references('id')
                ->cascadeOnDelete();

            $table->foreign('genre_id')->on('genres')->references('id')
                ->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
