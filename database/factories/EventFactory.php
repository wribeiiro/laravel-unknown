<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'event_venue_id' => 1,
            'event_date' => now(),
            'event_image' => $this->faker->imageUrl(),
            'event_info' => $this->faker->paragraph(),
            'event_info_contact' => $this->faker->paragraph(),
            'active' => 'Y'
        ];
    }
}
