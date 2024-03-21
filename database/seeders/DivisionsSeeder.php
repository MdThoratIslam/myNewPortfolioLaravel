<?php

namespace Database\Seeders;

use App\Models\Divisions\Divisions;
use Database\Factories\DivisionsFactory;
use Illuminate\Database\Seeder;

class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // division factory definition goes here multiple array foreach loop
        $divisionFactory = new DivisionsFactory();
        $data = $divisionFactory->definition();
        foreach ($data as $val) {
            Divisions::create($val);
        }
    }
}
