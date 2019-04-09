<?php

use Illuminate\Database\Seeder;
use App\Forum;


class ForumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Forum::create([
            'author' => 'abel@gmail.com',
            'subject' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book. It has survived not only five centuries, but also 
            the leap into electronic typesetting, remaining essentially unchanged. 
            It was popularised in the 1960s with the release of Letraset sheets 
            containing Lorem Ipsum passages, and more recently with desktop 
            publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        ]);

        Forum::create([
            'author' => 'erojasan@gmail.com',
            'subject' => 'Adiós a todos'
        ]);

        Forum::create([
            'author' => 'abel@gmail.com',
            'subject' => 'Hola que tal estamos todos'
        ]);
    }
}
