<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Trainer;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            'email' => User::where('email','obed@gmail.com')->value('email'),
        ]);
    
        Trainer::create([
            'email' => User::where('email','saulo@gmail.com')->value('email'),
        ]);
    }
}
