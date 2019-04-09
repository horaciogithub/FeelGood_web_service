<?php

use Illuminate\Database\Seeder;
use App\Exercises;

class ExercisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exercises::create([
            'name' => 'press banca',
            'series' => 3,
            'loops' => 15,
            'rest' => '00:01:00',
          ]);
  
          Exercises::create([
              'name' => 'press francés',
              'series' => 3,
              'loops' => 15,
              'rest' => '00:01:00',
            ]);
  
            Exercises::create([
              'name' => 'curl bíceps',
              'series' => 3,
              'loops' => 15,
              'rest' => '00:01:00',
            ]);
  
            Exercises::create([
              'name' => 'sentadillas',
              'series' => 3,
              'loops' => 15,
              'rest' => '00:01:00',
            ]);
  
            Exercises::create([
              'name' => 'press militar',
              'series' => 3,
              'loops' => 15,
              'rest' => '00:01:00',
            ]);
  
            Exercises::create([
              'name' => 'zancadas',
              'series' => 3,
              'loops' => 15,
              'rest' => '00:01:00',
            ]);
  
            Exercises::create([
              'name' => 'jalón al pecho',
              'series' => 3,
              'loops' => 15,
              'rest' => '00:01:00',
            ]);
  
            Exercises::create([
              'name' => 'dominadas',
              'series' => 3,
              'loops' => 15,
              'rest' => '00:01:00',
            ]);
    }
}
