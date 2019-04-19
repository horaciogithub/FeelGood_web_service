<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExerciseTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email', 40)->unique();
            $table->unsignedInteger('monday')->required();
            $table->unsignedInteger('tuesday')->nullable();
            $table->unsignedInteger('wednesday')->required();
            $table->unsignedInteger('thursday')->nullable();
            $table->unsignedInteger('friday')->required();
            $table->unsignedInteger('saturday')->nullable();
            $table->unsignedInteger('sunday')->nullable();

            $table->foreign('email')
                ->references('email')
                ->on('clients')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('monday')
                ->references('id')
                ->on('trainning_table')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('tuesday')
                ->references('id')
                ->on('trainning_table')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('wednesday')
                ->references('id')
                ->on('trainning_table')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('thursday')
                ->references('id')
                ->on('trainning_table')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('friday')
                ->references('id')
                ->on('trainning_table')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('saturday')
                ->references('id')
                ->on('trainning_table')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('sunday')
                ->references('id')
                ->on('trainning_table')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->timestamps();
            $table->date('exerc_end');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_table');
    }
}
