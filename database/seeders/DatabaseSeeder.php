<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Felhasznalo;
use App\Models\Iphone;
use App\Models\Profil;
use App\Models\Rendeles;
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
        \App\Models\User::factory(10)->create();
        $this->call(IphoneSeeder::class);
        $this->call(RendelesSeeder::class);
        $this->call(KategoriaSeeder::class);
        //$this->call(FelhasznaloSeeder::class);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
