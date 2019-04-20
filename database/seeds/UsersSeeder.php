<?php

use App\User;
use Illuminate\Database\Seeder;

// Modelo/Clase

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'horacioram94@gmail.com',
            'password' => bcrypt('111111'),
            'type' => 'admin',
            'name' => 'Horacio',
            'surname' => 'Ramírez',
            'birth_date' => '1987-11-22',
            'is_admin' => true,
        ]);

        /* ------------------ */
        /*    USER CLIENT     */
        /* ------------------ */

        User::create([
            'email' => 'abel@gmail.com',
            'password' => bcrypt('111111'),
            'type' => 'user',
            'name' => 'Abel',
            'surname' => 'Tacoronte',
            'complaints' => 2,
            'warnings' => 1,
            'birth_date' => '1987-08-01',
            'img' => 'img/user_profiles/user1.png',
        ]);

        User::create([
            'email' => 'obed@gmail.com',
            'password' => bcrypt('111111'),
            'type' => 'user',
            'name' => 'Obed',
            'surname' => 'Guerra',
            'birth_date' => '1989-10-02',
            'img' => 'img/user_profiles/user8.png',
        ]);

        User::create([
            'email' => 'maria@gmail.com',
            'password' => bcrypt('111111'),
            'type' => 'user',
            'name' => 'María',
            'surname' => 'Guerra',
            'birth_date' => '1989-10-02',
            'img' => 'img/user_profiles/user6.png',
        ]);

        User::create([
            'email' => 'adrian@gmail.com',
            'password' => bcrypt('111111'),
            'type' => 'user',
            'name' => 'Adrián',
            'surname' => 'Guerra',
            'birth_date' => '1989-10-02',
            'img' => 'img/user_profiles/user2.png',
        ]);

        /* ----------------------- */
        /*    ADMIN / TRAINERS     */
        /* ----------------------- */

        User::create([
            'email' => 'erojasan@gmail.com',
            'password' => bcrypt('111111'),
            'type' => 'trainer',
            'name' => 'Estefanía',
            'surname' => 'Rojas',
            'birth_date' => '1990-03-17',
            'img' => 'img/user_profiles/user6.png',
        ]);

        User::create([
            'email' => 'luisa@gmail.com',
            'password' => bcrypt('111111'),
            'type' => 'trainer',
            'name' => 'Luisa',
            'surname' => 'Ramírez',
            'birth_date' => '1982-05-17',
            'img' => 'img/user_profiles/user2.png',
        ]);

        User::create([
            'email' => 'saulo@gmail.com',
            'password' => bcrypt('111111'),
            'type' => 'trainer',
            'name' => 'Pepe',
            'surname' => 'Poveda',
            'birth_date' => '1989-10-02',
            'img' => 'img/user_profiles/user4.png',
        ]);

        User::create([
            'email' => 'samuel@gmail.com',
            'password' => bcrypt('111111'),
            'type' => 'trainer',
            'name' => 'Samuel',
            'surname' => 'Poveda',
            'birth_date' => '1989-10-02',
            'img' => 'img/user_profiles/user8.png',
        ]);

        User::create([
            'email' => 'carmen@gmail.com',
            'password' => bcrypt('111111'),
            'type' => 'trainer',
            'name' => 'Carmen',
            'surname' => 'Poveda',
            'birth_date' => '1989-10-02',
            'img' => 'img/user_profiles/user7.png',
        ]);

        User::create([
            'email' => 'juana@gmail.com',
            'password' => bcrypt('111111'),
            'type' => 'trainer',
            'name' => 'Juana',
            'surname' => 'Poveda',
            'birth_date' => '1989-10-02',
            'img' => 'img/user_profiles/user3.png',
        ]);

        User::create([
            'email' => 'alfredo@gmail.com',
            'password' => bcrypt('111111'),
            'type' => 'trainer',
            'name' => 'Alfredo',
            'surname' => 'Poveda',
            'birth_date' => '1989-10-02',
            'img' => 'img/user_profiles/user4.png',
        ]);

        User::create([
            'email' => 'paca@gmail.com',
            'password' => bcrypt('111111'),
            'type' => 'trainer',
            'name' => 'Paca',
            'surname' => 'Poveda',
            'birth_date' => '1989-10-02',
            'img' => 'img/user_profiles/user5.png',
        ]);

        User::create([
            'email' => 'manuel@gmail.com',
            'password' => bcrypt('111111'),
            'type' => 'trainer',
            'name' => 'Manu',
            'surname' => 'Poveda',
            'birth_date' => '1989-10-02',
            'img' => 'img/user_profiles/user1.png',
        ]);
    }
}
