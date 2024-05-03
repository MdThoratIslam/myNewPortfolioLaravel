<?php

namespace Database\Seeders;

use Database\Factories\PricingFactory;
use Illuminate\Database\Seeder;

class PricingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pricingFactory = new PricingFactory();
        $data = $pricingFactory->definition();
        foreach ($data as $val) {
            \App\Models\pricing\Pricing::create($val);
        }
    }
}
