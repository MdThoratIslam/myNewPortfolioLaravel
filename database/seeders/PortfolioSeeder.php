<?php

namespace Database\Seeders;

use App\Models\Portfolio\Portfolio;
use Database\Factories\Portfolio\PortfolioFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolioFactory = new PortfolioFactory();
        $data             = $portfolioFactory->definition();
        foreach ($data as $item)
        {
            Portfolio::create($item);
        }
    }
}
