<?php

namespace App\Http\Controllers\API;

use App\Exercises;
use App\Http\Controllers\Controller;
use App\TrainingTable;
use App\WarmUp;

class ExercicesController extends Controller
{
    public function data()
    {
        $data = array();

        $trainningTable = TrainingTable::all();
        // var_dump($trainningTable);
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
}
