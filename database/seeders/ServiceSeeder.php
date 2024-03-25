<?php

namespace Database\Seeders;

use App\Models\Service\Service;
use Database\Factories\Service\ServiceFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serviceFactory = new ServiceFactory();
        $data = $serviceFactory->definition();
        foreach ($data as $val) {
            Service::create($val);
        }
    }
}
