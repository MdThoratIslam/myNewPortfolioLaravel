<?php

namespace Database\Seeders;

use App\Models\TrainingSummary\TrainingSummary;
use Illuminate\Database\Seeder;


class TrainingSummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate one record for Professional Web Application Development
        TrainingSummary::factory()->professionalWebAppDevelopment()->create();

        // Generate one record for Web Development
        TrainingSummary::factory()->webDevelopment()->create();
    }
}
