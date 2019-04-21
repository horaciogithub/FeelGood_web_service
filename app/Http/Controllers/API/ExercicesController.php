<?php

namespace App\Http\Controllers\API;

use App\Exercises;
use App\Http\Controllers\Controller;
use App\TrainingTable;
use App\WarmUp;
use Illuminate\Http\Request;

class ExercicesController extends Controller
{
    // Muestra las rutinas
    public function data()
    {
        $data = array();

        $trainningTable = TrainingTable::all();
        $warmUp = WarmUp::all();

        for ($i = 0; $i < count($trainningTable); $i++) {
            $id = $trainningTable[$i]->id;
            $type = $trainningTable[$i]->type;
            $routine = $trainningTable[$i]->routine;
            $warmUp = WarmUp::where('id', '=', $trainningTable[$i]->warm_up)->get();
            $exerc1 = Exercises::where('id', '=', $trainningTable[$i]->exerc1)->get();
            $exerc2 = Exercises::where('id', '=', $trainningTable[$i]->exerc2)->get();
            $exerc3 = Exercises::where('id', '=', $trainningTable[$i]->exerc3)->get();
            $exerc4 = Exercises::where('id', '=', $trainningTable[$i]->exerc4)->get();
            $exerc5 = Exercises::where('id', '=', $trainningTable[$i]->exerc5)->get();
            $exerc6 = Exercises::where('id', '=', $trainningTable[$i]->exerc6)->get();

            $data[$i] = array();

            for ($j = 0; $j < 1; $j++) {
                $data[$i]['id'] = $id;
                $data[$i]['type'] = $type;
                $data[$i]['routine'] = $routine;
                $data[$i]['warmUp'] = $warmUp;
                $data[$i]['exercice1'] = $exerc1;
                $data[$i]['exercice2'] = $exerc2;
                $data[$i]['exercice3'] = $exerc3;
                $data[$i]['exercice4'] = $exerc4;
                $data[$i]['exercice5'] = $exerc5;
                $data[$i]['exercice6'] = $exerc6;
            }
        }

        return response()->json($data);
    }

    // Registra una nueva rutina
    public function routineRegister(Request $request)
    {
        // Registra el calentamiento
        $warmUp = WarmUp::create([
            'name' => $request->warm_up_name,
            'time' => $request->warm_up_time,
        ]);

        // Registra el ejercicio 1
        $execise1 = Exercises::create([
            'name' => $request->exerc1Name,
            'series' => $request->exerc1Series,
            'loops' => $request->exerc1Loops,
            'rest' => $request->exerc1Rest,
        ]);

        // Registra el ejercicio 2
        $execise2 = Exercises::create([
            'name' => $request->exerc2Name,
            'series' => $request->exerc2Series,
            'loops' => $request->exerc2Loops,
            'rest' => $request->exerc2Rest,
        ]);

        // Registra el ejercicio 3
        $execise3 = Exercises::create([
            'name' => $request->exerc3Name,
            'series' => $request->exerc3Series,
            'loops' => $request->exerc3Loops,
            'rest' => $request->exerc3Rest,
        ]);

        // Registra el ejercicio 4
        $execise4 = Exercises::create([
            'name' => $request->exerc4Name,
            'series' => $request->exerc4Series,
            'loops' => $request->exerc4Loops,
            'rest' => $request->exerc4Rest,
        ]);

        // Registra el ejercicio 5
        $execise5 = Exercises::create([
            'name' => $request->exerc5Name,
            'series' => $request->exerc5Series,
            'loops' => $request->exerc5Loops,
            'rest' => $request->exerc5Rest,
        ]);

        // Registra el ejercicio 6
        $execise6 = Exercises::create([
            'name' => $request->exerc6Name,
            'series' => $request->exerc6Series,
            'loops' => $request->exerc6Loops,
            'rest' => $request->exerc6Rest,
        ]);

        // Registra el ejercicio 7
        $exerc7id = null;
        if ($request->exerc7Name) {
            $execise7 = Exercises::create([
                'name' => $request->exerc7Name,
                'series' => $request->exerc7Series,
                'loops' => $request->exerc7Loops,
                'rest' => $request->exerc7Rest,
            ]);
            $exerc7id = $execise7->id;
        }

        // Registra el ejercicio 8
        $exerc8id = null;
        if ($request->exerc8Name) {
            $execise8 = Exercises::create([
                'name' => $request->exerc8Name,
                'series' => $request->exerc8Series,
                'loops' => $request->exerc8Loops,
                'rest' => $request->exerc8Rest,
            ]);
            $exerc8id = $execise8->id;
        }

        // Registra el ejercicio 9
        $exerc9id = null;
        if ($request->exerc9Name) {
            $execise9 = Exercises::create([
                'name' => $request->exerc9Name,
                'series' => $request->exerc9Series,
                'loops' => $request->exerc9Loops,
                'rest' => $request->exerc9Rest,
            ]);
            $exerc9id = $execise9->id;
        }

        // Registra el ejercicio 10
        $exerc10id = null;
        if ($request->exerc10Name) {
            $execise10 = Exercises::create([
                'name' => $request->exerc10Name,
                'series' => $request->exerc10Series,
                'loops' => $request->exerc10Loops,
                'rest' => $request->exerc10Rest,
            ]);
            $exerc10id = $execise10->id;
        }

        // Registra los ids de los ejercicios en la tabla de rutinas
        $routine = TrainingTable::create([
            'type' => $request->type,
            'routine' => $request->routine,
            'warm_up' => $warmUp->id,
            'exerc1' => $execise1->id,
            'exerc2' => $execise2->id,
            'exerc3' => $execise3->id,
            'exerc4' => $execise4->id,
            'exerc5' => $execise5->id,
            'exerc6' => $execise6->id,
            'exerc7' => $exerc7id,
            'exerc8' => $exerc8id,
            'exerc9' => $exerc9id,
            'exerc10' => $exerc10id,
        ]);

        return response()->json(['routine' => $routine]);
    }
}
