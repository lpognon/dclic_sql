<?php

namespace Database\Factories;

use App\Models\City;
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
        $gender = $this->faker->boolean(85) ? ($this->faker->boolean() ? 'M' : 'F') : null;
        $firstname = $gender == 'M' ? $this->faker->firstName('male') : (
            ($gender == 'F') ? $this->faker->firstName('female') :
            $this->faker->firstName()
        );
        return [
            'code' => $this->faker->unique()->ean8(),
            'firstname' => $firstname,
            'lastname' => $this->faker->lastName(),
            'gender' => $gender,
            'dob' => $this->faker->boolean(85) ? ($this->faker->dateTimeBetween($startDate = '-35 years', $endDate = '-22 years')->format('Y-m-d')) : null,
            'pob_id' => $this->faker->boolean(85) ? (City::inRandomOrder()->first()->id) : null,
            'email' => $this->faker->boolean(85) ? ($this->faker->email()) : null,
            'phone' => $this->faker->boolean(85) ? ($this->faker->phoneNumber()) : null,
            'whatsapp' => $this->faker->boolean(85) ? ($this->faker->unique()->phoneNumber()) : null,
            'is_active' => $this->faker->boolean(90),
            'profession' => $this->faker->boolean(85) ? ($this->faker->jobTitle()) : null,
            'observations' => $this->faker->boolean(85) ? ($this->faker->sentences(4, true)) : null,
        ];
    }
}
