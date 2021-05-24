<?php

namespace Database\Factories;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacancyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacancy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'id' => rand(1,30),
            'title' => $this->faker->name,
            'experienceRequired' => $this->faker->numberBetween(0, 6),
            'salary' => $this->faker->randomFloat(2, 1, 1000000000),
            'currency' => $this->faker->countryCode,
            'descriptionVacancy' => $this->faker->text(1000),
            'state' => $this->faker->numberBetween(0, 1),
            'endDate' => $this->faker->dateTimeBetween('+0 days', '+2 months'),

            'category_vacancy_id' => rand(1, 5),
            'recruiter_id' => rand(1, 10),
            'country_vacancy_id' => rand(1, 30),

        ];
    }
}
