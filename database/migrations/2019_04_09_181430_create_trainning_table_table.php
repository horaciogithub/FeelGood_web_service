<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainningTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainning_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type', ['aeróbico', 'anaeróbico'])->required();
            $table->string('routine', 25)->required();
            $table->unsignedInteger('warm_up')->required();
            $table->unsignedInteger('exerc1')->required();
            $table->unsignedInteger('exerc2')->required();
            $table->unsignedInteger('exerc3')->required();
            $table->unsignedInteger('exerc4')->required();
            $table->unsignedInteger('exerc5')->required();
            $table->unsignedInteger('exerc6')->required();
            $table->unsignedInteger('exerc7')->nullable();
            $table->unsignedInteger('exerc8')->nullable();
            $table->unsignedInteger('exerc9')->nullable();
            $table->unsignedInteger('exerc10')->nullable();

            $table->foreign('warm_up')->references('id')->on('warm_up')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('exerc1')->references('id')->on('exercices')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('exerc2')->references('id')->on('exercices')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('exerc3')->references('id')->on('exercices')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('exerc4')->references('id')->on('exercices')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('exerc5')->references('id')->on('exercices')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('exerc6')->references('id')->on('exercices')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('exerc7')->references('id')->on('exercices')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('exerc8')->references('id')->on('exercices')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('exerc9')->references('id')->on('exercices')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('exerc10')->references('id')->on('exercices')->onDelete('restrict')->onUpdate('cascade');
            
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
        Schema::dropIfExists('trainning_table');
    }
}
