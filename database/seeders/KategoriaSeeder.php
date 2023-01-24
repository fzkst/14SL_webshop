<?php

namespace Database\Seeders;

use App\Models\Kategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategoria::factory()->create([
            "nev" => "Táblagépek",
            "leiras" => "Apple tabletek - iPad, iPad Pro, iPad Mini - különböző színekben, méretben és tárhellyel.",
            "status" => 0,
            "nepszeru" => 0,
            "kepfajl" => "iPad_pro_kat.png"
        ]);

        Kategoria::factory()->create([
            "nev" => "Mobiltelefonok",
            "leiras" => "Apple okostelefonok iPhone 12-től a legújabbakig.",
            "status" => 0,
            "nepszeru" => 0,
            "kepfajl" => "Iphone_14_pro_kat.png"
        ]);




    }
}
