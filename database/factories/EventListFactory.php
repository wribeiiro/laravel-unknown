<?php

namespace Database\Factories;

use App\Models\EventList;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EventList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = ['F', 'M'];

        return [
            'name' => $this->faker->city,
            'event_id' => 1,
            'description' => $this->faker->paragraph(),
            'type' => $type[array_rand(['F', 'M'])],
            'list_end_date' => $this->faker->date()
        ];
    }
}
