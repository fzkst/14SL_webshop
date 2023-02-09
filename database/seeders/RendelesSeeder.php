<?php

namespace Database\Seeders;

use App\Models\Rendeles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RendelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rendeles::factory(20)->create();
    }
}
