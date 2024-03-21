<?php

namespace Database\Seeders;

use App\Models\Responsibilities\Responsibilities;
use Database\Factories\ResponsibilitiesFactory;
use Illuminate\Database\Seeder;

class ResponsibilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $responsibilitiesFactory = new ResponsibilitiesFactory();
        $data = $responsibilitiesFactory->definition();
        foreach ($data as $val) {
            Responsibilities::create($val);
        }
    }
}
