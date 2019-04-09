<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        /* Migra los datos de la tabla de usuarios */
        $this->call(UsersSeeder::class);

         // Standar user
         $this->call(ClientSeeder::class);

         // Trainer user / Administrator
         $this->call(TrainerSeeder::class);
 
         // ----------------
         //    EXERCICES
         // ----------------
 
         // Warm up exercise
         $this->call(WarmUpSeeder::class);
 
         // Exercises
         $this->call(ExercisesSeeder::class);
 
         // Training table 
         $this->call(TrainingTableSeeder::class);
 
         // Training routine from Monday untill Sunday
         $this->call(ExerciceTableSeeder::class);
 
         // It sends the exercise table to the user
         $this->call(AssignExerciseSeeder::class);
 
         // -------------
         //    FORUM
         // -------------
 
         $this->call(ForumSeeder::class);
    }
}
