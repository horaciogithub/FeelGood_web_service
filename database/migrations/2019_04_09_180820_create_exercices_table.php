<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',20)->required()->unique();
            $table->unsignedInteger('series')->required();
            $table->unsignedInteger('loops')->required();
            $table->time('rest')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercices');
    }
}
