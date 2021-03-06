<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->count(10) -> create();
        \App\Models\Product::factory()->count(20) -> create();
        \App\Models\Review::factory() -> count(200) -> create(); 
    }
}
