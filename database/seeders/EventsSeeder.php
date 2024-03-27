<?php

namespace Database\Seeders;

use App\Models\Events\Events;
use Database\Factories\Events\EventsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $eventsFactory    = new EventsFactory();
        $data               = $eventsFactory->definition();
        foreach ($data as $val)
        {
            Events::create($val);
        }
    }
}
