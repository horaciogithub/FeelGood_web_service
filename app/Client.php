<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';

    // Devuelve los datos de la tabla relacionada [ users ]
    public function userData()
    {
        return $this->belongsTo(User::class, 'email');
    }

    protected $fillable = [
        'email', 'sex', 'heigth', 'wheigth'
    ];
}
