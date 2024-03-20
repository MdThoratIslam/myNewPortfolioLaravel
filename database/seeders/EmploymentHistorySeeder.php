<?php

namespace Database\Seeders;

use App\Models\EmploymentHistory;
use Database\Factories\EmploymentHistoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmploymentHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employmentHistoryFactory = new EmploymentHistoryFactory();
        $data = $employmentHistoryFactory->definition();
        foreach ($data as $val) {
            EmploymentHistory::create($val);
        }
    }
}
