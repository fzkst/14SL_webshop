<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nem = fake()->randomElement(['male', 'female']);
        $nev = fake()->name($nem);
        $ekezetesKarakterek = array('á', 'é', 'ö', 'ü', 'ő', 'ű', 'ú', 'í', ' ');
        $karakterek = array('a', 'e', 'o', 'u', 'o', 'u', 'u', 'i', '');
        $email = str_replace($ekezetesKarakterek, $karakterek, Str::lower($nev));
        $randomNumber = random_int(10, 999);
        $email = $email.$randomNumber."@gmail.com";

        return [
            'name' => $nev,
            'email' => $email,  //fake()->unique()->safeEmail(),
            //'email_verified_at' => now(),
            'password' => Str::random(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}

