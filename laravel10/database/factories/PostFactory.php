<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'text'=>$this->faker->text,
            'description'=>$this->faker->sentence,
            'title'=>$this->faker->name,
            'img'=>$this->faker->word . 'jpg',
            // 'img' => $this->faker->imageUrl(640, 480, 'cats', true, 'Faker', true),

        
        ];
    }
}
