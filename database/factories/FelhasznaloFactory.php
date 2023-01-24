<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Felhasznalo>
 */
class FelhasznaloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
     /*   $maganszemely = random_int(0, 1);
        //$veletlen = random_int(0, 1);
        //$nev = array(['male', 'female']);
       // $vezeteknev = '';
        //$keresztnev = '';
        //$adoszam1 = substr(str_shuffle("0123456789"), 0, 8);
        //$adoszam2 = random_int(1, 5);
        //$adoszam3 = random_int(11, 44);
       /* if ($maganszemely === 0){
            $cegnev = fake()->company();
            //$vezeteknev = '';
            //$keresztnev = '';
        } else{
            $cegnev = 's';
            //$vezeteknev = fake()->lastName($nev.$veletlen);
            //$keresztnev = fake()->firstName($nev.$veletlen);
        } */

      /*  return [
            'user_id' => '5', // User::all()->random()->id,
            'maganszemely' => $maganszemely,
            'cegnev' => '5', // $cegnev,
            'vezeteknev' => '5', // $vezeteknev,
            'keresztnev' => '5', // $keresztnev,
            'iranyitoszam' => fake()->randomElement([1, 5, 6]),
            'varos' => '5', // fake()->state(),
            'cim' => '5', // fake()->streetAddress(),
            'telefon' => '5', // fake()->phoneNumber(),
            'adoszam' => '5' // $adoszam1.'-'.$adoszam2.'-'.$adoszam3
        ];*/
        return [
            //
        ];
    }
}

