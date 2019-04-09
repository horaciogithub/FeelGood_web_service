<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersDataController extends Controller
{
   /* Registered users */
   public function users() {
        $usuarios = User::where('type', '!=', 'admin')
            ->select('img', 'email', 'name', 'surname', 'type', 'complaints', 'warnings')
            ->get();

        return response()->json($usuarios);
    }
}
