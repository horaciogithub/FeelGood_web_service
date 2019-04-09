<?php

use Illuminate\Database\Seeder;
use App\WarmUp;

class WarmUpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WarmUp::create([
            'name' => 'bicicleta',
            'time' => '00:30:00',
         ]);
 
         WarmUp::create([
             'name' => 'remo',
             'time' => '00:20:00',
         ]);
 
         WarmUp::create([
             'name' => 'elíptica',
             'time' => '00:30:00',
         ]);
 
         WarmUp::create([
             'name' => 'step',
             'time' => '00:15:00',
         ]);
    }
}
