<?php

namespace Database\Seeders;

use App\Models\About\AboutSummary;
use Database\Factories\AboutSummaryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aboutSummaryFactory = new AboutSummaryFactory();
        $data= $aboutSummaryFactory->definition();
        AboutSummary::create($data);
    }
}
