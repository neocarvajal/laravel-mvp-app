<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=0; $i < 4; $i++){
        //     DB::table('clients')->insert([    
        //         'name' => fake()->name(),
        //         'dni' => fake()->unique()->randomNumber(8, true),
        //         'ruc' => fake()->unique()->randomNumber(9, true),
        //         'address' => Str::random(30),
        //         'phone' => fake()->unique()->phoneNumber(),
        //         'email' => fake()->unique()->safeEmail(),   
        //      ]);
        // }
           
    }
}
