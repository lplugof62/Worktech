<?php

namespace Database\Factories;

use App\Models\LevelLang;
use Illuminate\Database\Eloquent\Factories\Factory;

class LevelLangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LevelLang::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'level' => $this->faker->name,            
            'language_id' => rand(1, 20),    
        ];
    }
}
