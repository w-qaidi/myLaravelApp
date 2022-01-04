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
        \App\Models\Order::factory()->count(7)->create();
        \App\Models\Recap::factory(10)->count(3)->create();
        \App\Models\Stat::factory(10)->count(3)->create();
    }
}
