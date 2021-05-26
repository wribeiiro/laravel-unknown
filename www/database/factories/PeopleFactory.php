<?php

namespace Database\Factories;

use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Provider\pt_BR\Person;

class PeopleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = People::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'document' => rand(11111111111, 99999999999),
            'email' => $this->faker->email,
            'birth_date' => $this->faker->date(),
            'phone' => preg_replace('/[^0-9]/', '', $this->faker->phoneNumber)
        ];
    }
}
