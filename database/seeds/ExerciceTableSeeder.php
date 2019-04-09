<?php

use Illuminate\Database\Seeder;
use App\ExerciceTable;

class ExerciceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExerciceTable::create([
            'monday' => 1,
            'tuesday' => 2,
            'wednesday' => 3,
            'thursday' => 4,
            'friday' => 3,
            'saturday' => 1,
            'sunday' => 1,
        ]);
    }
}
