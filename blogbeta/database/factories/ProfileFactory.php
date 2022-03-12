<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id'=>User::factory(),
            'twitter_url' => $this->faker->sentence(),
            'website_url' => 'www.fake.com',
            'github_url' => $this->faker->sentence(),
            'created_at' => now(),  
        
        ];
    }
}
