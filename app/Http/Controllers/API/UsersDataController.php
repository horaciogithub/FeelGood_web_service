<?php

namespace App\Http\Controllers\API;

use App\Client;
use App\ExerciceTable;
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
            ->orderByRaw('id  ASC')
            ->paginate(5);
        // ->get(); sin paginación

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
        $warnings = intval($warnings);
        $warnings++;
        $success = User::find($id)->update(['warnings' => $warnings]);

        return response()->json(['success' => $success]);
    }

    /* Muestra los datos del cliente */
    public function clients()
    {
        $clients = Client::leftJoin('exercise_table', 'clients.email', '=', 'exercise_table.email')
            ->select(
                'clients.id',
                'clients.email',
                'clients.sex',
                'clients.heigth',
                'clients.wheigth',
                'exercise_table.id AS idTable',
                'exercise_table.email AS emailTable',
                'exercise_table.monday',
                'exercise_table.tuesday',
                'exercise_table.wednesday',
                'exercise_table.thursday',
                'exercise_table.friday',
                'exercise_table.saturday',
                'exercise_table.sunday',
                'exercise_table.created_at',
                'exercise_table.exerc_end',
            )
            ->get();

        return response()->json($clients);
    }

    public function clientTable(Request $request)
    {
        $client = Client::leftJoin('exercise_table', 'clients.email', '=', 'exercise_table.email')
            ->select(
                'clients.id',
                'clients.email',
                'clients.sex',
                'clients.heigth',
                'clients.wheigth',
                'exercise_table.id AS idTable',
                'exercise_table.email AS emailTable',
                'exercise_table.monday',
                'exercise_table.tuesday',
                'exercise_table.wednesday',
                'exercise_table.thursday',
                'exercise_table.friday',
                'exercise_table.saturday',
                'exercise_table.sunday',
                'exercise_table.created_at',
                'exercise_table.exerc_end',
            )
            ->where('clients.email', '=', $request->email)
            ->get();

        return response()->json(['data' => $client]);
    }

    public function postTable(Request $request)
    {
        $table = ExerciceTable::whereEmail($request->email)->get();
        $success = '';

        if (count($table) > 0) {
            if (!empty($request->monday) && !empty($request->tuesday) && !empty($request->wednesday) &&
                !empty($request->thursday) && !empty($request->friday) && !empty($request->saturday) &&
                !empty($request->sunday) && !empty($request->exerc_end)) {

                ExerciceTable::where('email', $request->email)
                    ->update([
                        'monday' => $request->monday,
                        'tuesday' => $request->tuesday,
                        'wednesday' => $request->wednesday,
                        'thursday' => $request->thursday,
                        'friday' => $request->friday,
                        'saturday' => $request->saturday,
                        'sunday' => $request->sunday,
                        'exerc_end' => $request->exerc_end,
                    ]);
                $success = true;
            } else {
                $success = false;
            }

        } else {
            if (!empty($request->monday) && !empty($request->tuesday) && !empty($request->wednesday) &&
                !empty($request->thursday) && !empty($request->friday) && !empty($request->saturday) &&
                !empty($request->sunday) && !empty($request->exerc_end)) {

                ExerciceTable::create([
                    'email' => $request->email,
                    'monday' => $request->monday,
                    'tuesday' => $request->tuesday,
                    'wednesday' => $request->wednesday,
                    'thursday' => $request->thursday,
                    'friday' => $request->friday,
                    'saturday' => $request->saturday,
                    'sunday' => $request->sunday,
                    'exerc_end' => $request->exerc_end,
                ]);
                $success = 'true';
            }
            return response()->json(['success' => $success]);
        }
    }

    public function deleteTable(Request $request)
    {
        $email = $request->email;
        $id = ExerciceTable::whereEmail($email)->get('id');
        $id = $id[0]->id;
        $success = ExerciceTable::destroy($id);

        return response()->json(['success' => $success]);
    }
}
