<?php

namespace Database\Factories;

use App\Models\Series;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->word(),
            'description' => $this->faker->sentence(),
            'url' => $this->faker->word(),
            'series_id' => Series::factory(),
            'watchable_id' => 1,
            'watchable_type' => 'S',
        ];
    }
}
