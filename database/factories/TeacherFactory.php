<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $gender = $this->faker->boolean(85) ? ($this->faker->boolean() ? 'M' : 'F') : null;
        $firstname = $gender == 'M' ? $this->faker->firstName('male') : (
            ($gender == 'F') ? $this->faker->firstName('female') :
            $this->faker->firstName()
        );

        return [
            'firstname' => $firstname,
            'lastname' => $this->faker->lastName(),
            'gender' => $gender,
        ];
    }
}
