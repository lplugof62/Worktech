<?php

namespace Database\Factories;

use App\Models\TechnologyDeveloper;
use Illuminate\Database\Eloquent\Factories\Factory;

class TechnologyDeveloperFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TechnologyDeveloper::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'technology_id' => rand(1, 20),
            'developer_id' => rand(1, 10),
        ];
    }
}
