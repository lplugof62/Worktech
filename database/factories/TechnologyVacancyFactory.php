<?php

namespace Database\Factories;

use App\Models\TechnologyVacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

class TechnologyVacancyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TechnologyVacancy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'vacancy_id' => rand(1, 10),
            'tech_id' => rand(1, 20),
            
        ];
    }
}
