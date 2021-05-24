<?php

namespace Database\Factories;

use App\Models\Developer;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeveloperFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Developer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'id' => rand(1,30),
            'experience' => rand(0,6),
            'aboutme' => $this->faker->text(1000),
            'curriculum' => $this->faker->name,
            'photo' => $this->faker->imageUrl(300,300),
            'portfolio' => $this->faker->name,          
        ];
    }
}
