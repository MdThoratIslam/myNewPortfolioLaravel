<?php

namespace Database\Seeders;

use App\Models\AcademicQualification\AcademicQualification;
use Database\Factories\AcademicQualificationFactory;
use Illuminate\Database\Seeder;

class AcademicQualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $academicQualificationFactory = new AcademicQualificationFactory();
        $data = $academicQualificationFactory->definition();
        foreach ($data as $val)
        {
            AcademicQualification::create($val);
        }
    }
}
