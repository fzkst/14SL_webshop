<?php

namespace Database\Seeders;

use App\Models\Iphone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Iphone::factory(10)->create();
    }
}
// DB::table('iphones')->insert(array (
        //     0 =>
        //     array (
        //         `id` => 1,
        //         `modell` => 'iPhone 14 Pro Max',
        //         `szin` => 'mélylila',
        //         `tarhely` => 128,
        //         `ar` => 629990,
        //         `keszlet` => 5,
        //         `kepfajl` => 'iPhone14proMaxMelylila.jpg',
        //     ),
        //     1 =>
        //     array (
        //         `id` => 2,
        //         `modell` => 'iPhone 14 Pro Max',
        //         `szin` => 'mélylila',
        //         `tarhely` => 256,
        //         `ar` => 689990,
        //         `keszlet` => 4,
        //         `kepfajl` => 'iPhone14proMaxMelylila.jpg',
        //     ),
        //     2 =>
        //     array (
        //         `id` => 3,
        //         `modell` => 'iPhone 14 Pro Max',
        //         `szin` => 'mélylila',
        //         `tarhely` => 512,
        //         `ar` => 809990,
        //         `keszlet` => 3,
        //         `kepfajl` => 'iPhone14proMaxMelylila.jpg',
        //     ),
        //     3 =>
        //     array (
        //         `id` => 4,
        //         `modell` => 'iPhone 14 Pro Max',
        //         `szin` => 'mélylila',
        //         `tarhely` => 1,
        //         `ar` => 929990,
        //         `keszlet` => 1,
        //         `kepfajl` => 'iPhone14proMaxMelylila.jpg',
        //     ),
        //     4 =>
        //     array (
        //         `id` => 5,
        //         `modell` => 'iPhone 14 Pro Max',
        //         `szin` => 'arany',
        //         `tarhely` => 128,
        //         `ar` => 629990,
        //         `keszlet` => 3,
        //         `kepfajl` => 'iPhone14proMaxArany.jpg',
        //     ),
        //     5 =>
        //     array (
        //         `id` => 6,
        //         `modell` => 'iPhone 14 Pro Max',
        //         `szin` => 'arany',
        //         `tarhely` => 256,
        //         `ar` => 689990,
        //         `keszlet` => 3,
        //         `kepfajl` => 'iPhone14proMaxArany.jpg',
        //     ),
        //     6 =>
        //     array (
        //         `id` => 7,
        //         `modell` => 'iPhone 14 Pro Max',
        //         `szin` => 'arany',
        //         `tarhely` => 512,
        //         `ar` => 809990,
        //         `keszlet` => 3,
        //         `kepfajl` => 'iPhone14proMaxArany.jpg',
        //     ),
        //     7 =>
        //     array (
        //         `id` => 8,
        //         `modell` => 'iPhone 14 Pro Max',
        //         `szin` => 'arany',
        //         `tarhely` => 1,
        //         `ar` => 929990,
        //         `keszlet` => 3,
        //         `kepfajl` => 'iPhone14proMaxArany.jpg',
        //     ),
        //     8 =>
        //     array (
        //         `id` => 9,
        //         `modell` => 'iPhone 14 Pro Max',
        //         `szin` => 'ezüst',
        //         `tarhely` => 128,
        //         `ar` => 629990,
        //         `keszlet` => 3,
        //         `kepfajl` => 'iPhone14proMaxEzust.jpg',
        //     ),
        //     9 =>
        //     array (
        //         `id` => 10,
        //         `modell` => 'iPhone 14 Pro Max',
        //         `szin` => 'ezüst',
        //         `tarhely` => 256,
        //         `ar` => 689990,
        //         `keszlet` => 3,
        //         `kepfajl` => 'iPhone14proMaxEzust.jpg',
        //     ),
        // ));
