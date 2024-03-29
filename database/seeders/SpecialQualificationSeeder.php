<?php

namespace Database\Seeders;

use App\Models\SpecialQualification\SpecialQualification;
use Database\Factories\SpecialQualificationFactory;
use Illuminate\Database\Seeder;

class SpecialQualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specialQualificationFactory    = new SpecialQualificationFactory();
        $data                           = $specialQualificationFactory->definition();
        foreach ($data as $val)
        {
            SpecialQualification::create($val);
        }
    }
}
