<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forum';

    protected function user(){
        return $this -> belongsTo(User::class, 'email');
    }
}
