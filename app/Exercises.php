<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercises extends Model
{
    protected $table = 'exercices';

    protected $fillable = [
        'name', 'series', 'loops', 'rest',
    ];
}
