<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Generator\RandomLibAdapter;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Iphone>
 */
class IphoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'modell' => fake()->randomElement(['iPhone 14 Pro Max', 'iPhone 14 Pro', 'iPhone 14 Plus', 'iPhone 14', 'iPhone 13', 'iPhone 13 mini', 'iPhone SE', 'iPhone 12']),
            'szin' => fake()->randomElement(['mélylila', 'arany', 'ezüst', 'asztrofekete', 'lila', 'éjfekete', 'csillagfény', '(PRODUCT) RED', 'kék', 'rózsaszín', 'zöld', 'fehér', 'fekete']),
            'tarhely' => fake()->randomElement([64, 128, 256, 512, 1]),
            'ar' => fake()->randomElement([629990, 689990, 809990, 929990, 569990, 749990, 499990, 559990, 679990, 449990, 509990, 389000]),
            'keszlet' => fake()->randomElement([1, 2, 3, 4, 5, 6, 7, 8]),
            'kepfajl' => fake()->randomElement(['iPhone14proMaxMelylila.jpg', 'iPhone14proMaxArany.jpg', 'iPhone14proMaxEzust.jpg', 'iPhone14proMaxAsztrofekete.jpg'])
        ];
    }
}

