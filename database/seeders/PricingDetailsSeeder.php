<?php

namespace Database\Seeders;

use Database\Factories\PricingDetailsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PricingDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pricingDetailsFactory = new PricingDetailsFactory();
        $data = $pricingDetailsFactory->definition();
        foreach ($data as $val) {
            \App\Models\Pricing_details::create($val);
        }
    }
}
