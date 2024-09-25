<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TrainingSummary\TrainingSummary;

class TrainingSummarySeeder extends Seeder
{
    public function run(): void
    {
        // Create using the professionalWebAppDevelopment state
        TrainingSummary::factory()->professionalWebAppDevelopment()->create();

        // Create using the webDevelopment state
        TrainingSummary::factory()->webDevelopment()->create();
    }
}
