<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingTable extends Model
{
    protected $table = 'trainning_table';

    protected $fillable = [
        'type', 'routine', 'warm_up', 'exerc1', 'exerc2', 'exerc3', 'exerc4', 'exerc5', 'exerc6', 'exerc7', 'exerc8', 'exerc9', 'exerc10',
    ];

    protected function warmUp()
    {
        return $this->belongsTo(WarmUp::class, 'warm_up');
    }

    protected function exercise1()
    {
        return $this->belongsTo(Exercises::class, 'exerc1');
    }

    protected function exercise2()
    {
        return $this->belongsTo(Exercises::class, 'exerc2');
    }

    protected function exercise3()
    {
        return $this->belongsTo(Exercises::class, 'exerc3');
    }

    protected function exercise4()
    {
        return $this->belongsTo(Exercises::class, 'exerc4');
    }

    protected function exercise5()
    {
        return $this->belongsTo(Exercises::class, 'exerc5');
    }

    protected function exercise6()
    {
        return $this->belongsTo(Exercises::class, 'exerc6');
    }
}
