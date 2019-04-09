<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            'email' => User::where('email','abel@gmail.com')->value('email'),
            'sex' => 'm',
            'heigth' => 1.65,
            'wheigth' => 62,
        ]);

        Client::create([
            'email' => User::where('email','horacioram94@gmail.com')->value('email'),
            'sex' => 'm',
            'heigth' => 1.82,
            'wheigth' => 78,
        ]);
    }
}
