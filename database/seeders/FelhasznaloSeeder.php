<?php

namespace Database\Seeders;

use App\Models\Felhasznalo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FelhasznaloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Felhasznalo::factory(10)->create();

        Felhasznalo::factory()->create([
            "user_id" => 2,
            "maganszemely" => 1,
            "cegnev" => "béla",
            "vezeteknev" => "Gipsz",
            "keresztnev" => "Jakab",
            "iranyitoszam" => 1154,
            "varos" => "Pécs",
            "cim" => "Pesti út 54.",
            "telefon" => "+36205487955",
            "adoszam" => "007"
        ]);

    }
}
