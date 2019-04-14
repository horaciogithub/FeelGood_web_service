<?php

namespace App\Http\Controllers\API;

use App\Client;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UsersDataController extends Controller
{
    /* Datos de los usuarios registrados en el sistema */
    public function users()
    {
        $usuarios = User::where('type', '!=', 'admin')
            ->select('id', 'img', 'email', 'name', 'surname', 'type', 'complaints', 'warnings')
            ->get();

        return response()->json($usuarios);
    }

    /* Delete user */
    public function userDelete(Request $request)
    {
        $id = $request->id;
        $success = User::destroy($id);

        return response()->json(['success' => $success]);
    }

    /* Add warning message */
    public function userWarning(Request $request)
    {
        $id = $request->id;
        $warnings = User::find($id)->warnings;
        $warnings++;
        $success = User::find($id)->update(['warnings' => $warnings]);

        return response()->json(['success' => $success]);
    }

    /* Muestra los datos del cliente */
    public function clients()
    {
        $clients = Client::all();
        return response()->json($clients);
    }
}
