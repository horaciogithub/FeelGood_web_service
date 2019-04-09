<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignExercise extends Model
{
    protected $table = 'assign_exercise';

    protected function trainer(){
        return $this -> belongsTo(Trainer::class, 'id_trainer');
    }

    protected function exercise(){
        return $this -> belongsTo(ExerciseTable::class, 'id_exerc');
    }

    protected function user(){
        return $this -> belongsTo(Client::class, 'email');
    }
}
