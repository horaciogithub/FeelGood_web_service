<?php

use Illuminate\Database\Seeder;
use App\TrainingTable;

class TrainingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrainingTable::create([
            'type' => 'aeróbico',
            'routine' => 'hombros',
            'warm_up' => 2,
            'exerc1' => 2,
            'exerc2' => 5,
            'exerc3' => 8,
            'exerc4' => 4,
            'exerc5' => 3,
            'exerc6' => 6,
        ]);

        TrainingTable::create([
            'type' => 'anaeróbico',
            'routine' => 'pecho',
            'warm_up' => 3,
            'exerc1' => 1,
            'exerc2' => 4,
            'exerc3' => 5,
            'exerc4' => 6,
            'exerc5' => 3,
            'exerc6' => 8,
        ]);

        TrainingTable::create([
            'type' => 'aeróbico',
            'routine' => 'dorsales',
            'warm_up' => 2,
            'exerc1' => 1,
            'exerc2' => 6,
            'exerc3' => 3,
            'exerc4' => 4,
            'exerc5' => 5,
            'exerc6' => 2,
        ]);

        TrainingTable::create([
            'type' => 'anaeróbico',
            'routine' => 'bíceps/tríceps',
            'warm_up' => 1,
            'exerc1' => 3,
            'exerc2' => 4,
            'exerc3' => 5,
            'exerc4' => 6,
            'exerc5' => 7,
            'exerc6' => 8,
        ]);
    }
}
