<?php

namespace Database\Factories;

use App\Models\Iphone;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rendeles>
 */
class RendelesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'userId' => User::all()->random()->id,
            'iphoneId' => Iphone::all()->random()->id,
            'rendelesIdeje' => now()
        ];
    }
}

