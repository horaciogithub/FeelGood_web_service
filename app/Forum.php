<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $table = 'forum';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'author', 'subject'
    ];

    protected function user(){
        return $this -> belongsTo(User::class, 'email');
    }
}
