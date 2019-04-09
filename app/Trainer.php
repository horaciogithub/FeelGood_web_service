<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $table = 'trainer';

    protected function user(){
        return $this -> belongsTo(User::class, 'email');
    }

    // Fill columns
    protected $fillable = [
        'email'
    ];
}
