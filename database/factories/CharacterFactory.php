<?php

namespace Database\Factories;

use App\Models\Anime;
use App\Models\Character;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    protected $model = Character::class;

    public function definition()
    {
        return [
            'anime_id' => Anime::factory(),
            'name' => $this->faker->name,
            'role' => $this->faker->randomElement(['Protagonist', 'Antagonist', 'Supporting']),
            'voice_actor' => $this->faker->name,
        ];
    }
}
