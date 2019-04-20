<?php

use App\Client;
use App\User;
use Illuminate\Database\Seeder;

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
            'email' => User::where('email', 'abel@gmail.com')->value('email'),
            'sex' => 'm',
            'heigth' => 1.65,
            'wheigth' => 62,
        ]);

        Client::create([
            'email' => User::where('email', 'obed@gmail.com')->value('email'),
            'sex' => 'm',
            'heigth' => 1.82,
            'wheigth' => 52,
        ]);

        Client::create([
            'email' => User::where('email', 'maria@gmail.com')->value('email'),
            'sex' => 'f',
            'heigth' => 1.82,
            'wheigth' => 150,
        ]);

        Client::create([
            'email' => User::where('email', 'adrian@gmail.com')->value('email'),
            'sex' => 'm',
            'heigth' => 1.82,
            'wheigth' => 78,
        ]);
    }
}
