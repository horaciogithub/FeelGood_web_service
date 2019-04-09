<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerciceTable extends Model
{
    protected $table = 'exercice_table';

    protected function mond(){
        return $this -> belongsTo(TrainingTable::class, 'monday');
    }

    protected function tues(){
        return $this -> belongsTo(TrainingTable::class, 'tuesday');
    }

    protected function wed(){
        return $this -> belongsTo(TrainingTable::class, 'wednesday');
    }

    protected function thu(){
        return $this -> belongsTo(TrainingTable::class, 'thursday');
    }

    protected function frid(){
        return $this -> belongsTo(TrainingTable::class, 'friday');
    }

    protected function sat(){
        return $this -> belongsTo(TrainingTable::class, 'saturday');
    }

    protected function sun(){
        return $this -> belongsTo(TrainingTable::class, 'sunday');
    }
}
