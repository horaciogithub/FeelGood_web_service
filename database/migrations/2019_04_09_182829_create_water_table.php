<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('water', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table -> string('email', 40) 
                   -> required();

            $table ->unsignedInteger('amount') 
                   -> required();

            $table -> datetime('date');
            
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
        Schema::dropIfExists('water');
    }
}
