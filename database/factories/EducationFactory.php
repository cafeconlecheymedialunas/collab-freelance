<?php

namespace Database\Factories;

use App\Models\Education;
use Illuminate\Database\Eloquent\Factories\Factory;

class EducationFactory extends Factory
{
    protected $model = Education::class;

    public function definition()
    {
        return [
            'freelancer_id' => \App\Models\Freelancer::factory(),
            'type' => $this->faker->randomElement(['Degree', 'Diploma', 'Certificate']),
            'institution' => $this->faker->company,
            'title' => $this->faker->sentence,
            'init_at' => $this->faker->date,
            'finish_at' => $this->faker->date,
            'description' => $this->faker->paragraph,
            'finished' => $this->faker->boolean,
        ];
    }
}