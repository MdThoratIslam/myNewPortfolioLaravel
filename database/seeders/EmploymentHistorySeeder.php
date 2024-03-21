<?php

namespace Database\Seeders;

use App\Models\EmploymentHistory\EmploymentHistory;
use Database\Factories\EmploymentHistoryFactory;
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
