<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->unique()->ean8(),
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'gender' => $this->faker->boolean()?'M':'F',
            'dob' => $this->faker->dateTimeBetween($startDate='-35 years',$endDate='-22 years')->format('Y-m-d'),
            'pob' => $this->faker->city(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'whatsapp' => $this->faker->unique()->phoneNumber(),
            'is_active' => $this->faker->boolean(90),
            'profession' => $this->faker->jobTitle(),
            'observations' => $this->faker->sentences(4,true),
        ];
    }
}
