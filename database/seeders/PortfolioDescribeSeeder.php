<?php

namespace Database\Seeders;

use App\Models\Portfolio\Portfolio_describe;
use Database\Factories\Portfolio\PortfolioDescribeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioDescribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolioDescribeFactory   = new PortfolioDescribeFactory();
        $data                       = $portfolioDescribeFactory->definition();
        foreach ($data as $item)
        {
            Portfolio_describe::create($item);
        }
    }
}
