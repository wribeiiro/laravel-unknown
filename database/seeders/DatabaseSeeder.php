<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(2)->create();
        \App\Models\People::factory(10)->create();
        \App\Models\EventVenue::factory(3)->create();
        \App\Models\Event::factory(3)->create();
        \App\Models\EventList::factory(3)->create();
    }
}
