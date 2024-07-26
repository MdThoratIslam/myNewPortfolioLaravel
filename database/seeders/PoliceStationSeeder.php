<?php

namespace Database\Seeders;

use App\Models\PoliceStation;
use Database\Factories\PoliceStationFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoliceStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $policeStationFactory = new PoliceStationFactory();
        $data = $policeStationFactory->definition();
        foreach ($data as $policeStation)
        {
            PoliceStation::create($policeStation);
        }
    }
}
