<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\Client::factory()->count(5)->create();
        \App\Models\Provider::factory()->count(5)->create();
        \App\Models\Category::factory()->count(3)->create();
        \App\Models\Product::factory()->count(4)->create();
        \App\Models\User::factory()->count(1)->create();

        // $this->call([ seeder
        //     ClientSeeder::class,
        // ]);
    }
}
