<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignExerciseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_exercise', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table -> unsignedInteger('id_trainer') 
                     -> nullable();

              $table -> unsignedInteger('id_exerc');

              $table -> string('email', 40)
                     -> unique();

              $table -> date('exerc_end');
              
              $table -> foreign('id_trainer')
                     -> references('id')
                     -> on('trainer')
                     -> onDelete('set null')
                     -> onUpdate('cascade');
              
              $table -> foreign('id_exerc')
                     -> references('id')
                     -> on('exercices')
                     -> onDelete('restrict')
                     -> onUpdate('cascade');
              
              $table -> foreign('email')
                     -> references('email')
                     -> on('clients')
                     -> onDelete('cascade')
                     -> onUpdate('cascade');
                     
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
        Schema::dropIfExists('assign_exercise');
    }
}
