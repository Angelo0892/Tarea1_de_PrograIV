<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(CategoryTableSeeder::class);
        \App\Models\Category::factory(10)->create();
        \App\Models\Provider::factory(30)->create();
        $this->call(AnimalSeeder::class);
        
        Animal::factory(50)->create();
    }
}
