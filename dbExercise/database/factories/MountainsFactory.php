<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mountains>
 */
class MountainsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'height'=> $this->faker->numberBetween(2000, 8848),
            'belongsToRange'=> $this->faker->boolean(),
            'firstClimbDate'=> $this->faker->boolean(),
            'continent'=> $this->faker->ramdomElement(['Africa', 'Asia',
            'Europe', 'America', 'Oceania'])
        ];
    }
}
