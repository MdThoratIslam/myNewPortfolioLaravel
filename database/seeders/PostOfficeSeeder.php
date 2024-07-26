<?php

namespace Database\Seeders;

use App\Models\PoliceStation;
use App\Models\PostOffice;
use Database\Factories\PoliceStationFactory;
use Database\Factories\PostOfficeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class PostOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $PostOfficeFactory = new PostOfficeFactory();
        $data = $PostOfficeFactory->definition();
        foreach ($data as $policeStation)
        {
            PostOffice::create($policeStation);
        }
    }
}
