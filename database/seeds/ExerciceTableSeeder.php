<?php

use App\ExerciceTable;
use Illuminate\Database\Seeder;

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
            'email' => 'abel@gmail.com',
            'monday' => 1,
            'tuesday' => 2,
            'wednesday' => 3,
            'thursday' => 4,
            'friday' => 3,
            'saturday' => 1,
            'sunday' => 1,
            'exerc_end' => '2018-09-15',
        ]);
    }
}
