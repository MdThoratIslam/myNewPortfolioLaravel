<?php

namespace Database\Seeders;

use App\Models\CareerAndApplicationInformation;
use Database\Factories\CareerAndApplicationInformationFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CareerAndApplicationInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $careerAndApplicationInformationFactory = new CareerAndApplicationInformationFactory();
        $data = $careerAndApplicationInformationFactory->definition();
        foreach ($data as $val)
        {
            CareerAndApplicationInformation::create($val);
        }
    }
}
