<?php

namespace Database\Factories;

use App\Models\Recruiter;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecruiterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recruiter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'id' => rand(1,30),
            'nameCompany' => $this->faker->name,
            'descriptionCompany' => $this->faker->sentence,
            'webSiteCompany' => $this->faker->country,
            'photoCompany' => $this->faker->imageUrl(300,300)          
        ];
    }
}
