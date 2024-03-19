<?php

namespace Database\Seeders;

use App\Models\Districts;
use Database\Factories\DistrictsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districtFactory = new DistrictsFactory();
        $data = $districtFactory->definition();
        foreach ($data as $val) {
            Districts::create($val);
        }

    }
}
