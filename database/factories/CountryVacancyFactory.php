<?php

namespace Database\Factories;

use App\Models\CountryVacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryVacancyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CountryVacancy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'country' => $this->faker->country  
        ];
    }
}
