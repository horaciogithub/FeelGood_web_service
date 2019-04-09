<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// Modelo/Clase
use App\AssignExercise;

class AssignExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AssignExercise::create([
            'id_trainer' => 1,
            'id_exerc' => 1,
            'email' => 'abel@gmail.com',
            'exerc_end' => '2018-09-15',
        ]);
    }
}
