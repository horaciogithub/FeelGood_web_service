<?php

namespace App\Http\Controllers\API;

use App\Client;
use App\ExerciceTable;
use App\Exercises;
use App\Http\Controllers\Controller;
use App\TrainingTable;
use App\User;
use App\WarmUp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{

    public $successStatus = 200;

    private function makeExerciceTable($day)
    {

        $table = array(

            // Table routine
            'routine' => $day->routine,

            // Warm up
            array(
                'name' => WarmUp::find($day->warm_up)->name,
                'time' => WarmUp::find($day->warm_up)->time,
            ),

            // Exercise 1
            array(
                'name' => Exercises::find($day->exerc1)->name,
                'series' => Exercises::find($day->exerc1)->series,
                'loops' => Exercises::find($day->exerc1)->loops,
                'rest' => Exercises::find($day->exerc1)->rest,
            ),

            // Exercise 2
            array(
                'name' => Exercises::find($day->exerc2)->name,
                'series' => Exercises::find($day->exerc2)->series,
                'loops' => Exercises::find($day->exerc2)->loops,
                'rest' => Exercises::find($day->exerc2)->rest,
            ),

            // Exercise 3
            array(
                'name' => Exercises::find($day->exerc3)->name,
                'series' => Exercises::find($day->exerc3)->series,
                'loops' => Exercises::find($day->exerc3)->loops,
                'rest' => Exercises::find($day->exerc3)->rest,
            ),

            // Exercise 4
            array(
                'name' => Exercises::find($day->exerc4)->name,
                'series' => Exercises::find($day->exerc4)->series,
                'loops' => Exercises::find($day->exerc4)->loops,
                'rest' => Exercises::find($day->exerc4)->rest,
            ),

            // Exercise 5
            array(
                'name' => Exercises::find($day->exerc5)->name,
                'series' => Exercises::find($day->exerc5)->series,
                'loops' => Exercises::find($day->exerc5)->loops,
                'rest' => Exercises::find($day->exerc5)->rest,
            ),

            // Exercise 6
            array(
                'name' => Exercises::find($day->exerc6)->name,
                'series' => Exercises::find($day->exerc6)->series,
                'loops' => Exercises::find($day->exerc6)->loops,
                'rest' => Exercises::find($day->exerc6)->rest,
            ),
        );

        return $table;
    }

    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;

            if ($user->type == 'user') {

                /* ----------------- */
                /*     EXERCISES     */
                /* ----------------- */

                // It finds the exercise table
                $exerciseId = ExerciceTable::whereEmail($user->email)->value('id');

                if ($exerciseId != null) {
                    $ExerciceTableId = ExerciceTable::find($exerciseId);

                    $monExerc = TrainingTable::find($ExerciceTableId->monday);
                    $tuesExerc = TrainingTable::find($ExerciceTableId->tuesday);
                    $wednesExerc = TrainingTable::find($ExerciceTableId->wednesday);
                    $thursExerc = TrainingTable::find($ExerciceTableId->thursday);
                    $friExerc = TrainingTable::find($ExerciceTableId->friday);
                    $saturExerc = TrainingTable::find($ExerciceTableId->saturday);
                    $sunExerc = TrainingTable::find($ExerciceTableId->friday);

                    // Creates the exercise table per day of the week
                    $monExercTable = $this->makeExerciceTable($monExerc);
                    $tuesExercTable = $this->makeExerciceTable($tuesExerc);
                    $wedExercTable = $this->makeExerciceTable($wednesExerc);
                    $thuExercTable = $this->makeExerciceTable($thursExerc);
                    $friExercTable = $this->makeExerciceTable($friExerc);
                    $satExercTable = $this->makeExerciceTable($saturExerc);
                    $sunExercTable = $this->makeExerciceTable($sunExerc);

                    $table = [
                        'monExerc' => $monExercTable,
                        'tuesExerc' => $tuesExercTable,
                        'wedExerc' => $wedExercTable,
                        'thuExerc' => $thuExercTable,
                        'friExerc' => $friExercTable,
                        'satExerc' => $satExercTable,
                        'sunExerc' => $sunExercTable,
                    ];

                    return response()->json(['userData' => $user, 'success' => $success, 'table' => $table], $this->successStatus);
                } else {
                    return response()->json(['userData' => $user, 'success' => $success, 'table' => null], $this->successStatus);
                }
            } else {
                return response()->json(['userData' => $user, 'success' => $success], $this->successStatus);
            }
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        // Crea el nuevo cliente
        if ($request->type == 'user') {
            $client = Client::create([
                'email' => $request->email,
                'sex' => $request->sex,
                'heigth' => $request->heigth,
                'wheigth' => $request->wheigth,
            ]);
        }

        $success['token'] = $user->createToken('MyApp')->accessToken;
        //$success['userData'] =  $user->name;

        // Tras el registro, logea al usuario
        return $this->login($request);

        // Otra opción es la siguiente
        // return response()->json(['success'=>$success, 'userData'=>$user], $this->successStatus);
    }

    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */

    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }
}
