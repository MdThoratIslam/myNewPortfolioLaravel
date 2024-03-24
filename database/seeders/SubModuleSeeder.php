<?php

namespace Database\Seeders;

use App\Models\Module\SubModule;
use Database\Factories\Module\SubModuleFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subModuleFactory = new SubModuleFactory();
        $data = $subModuleFactory->definition();
        foreach ($data as $val) {
            SubModule::create($val);
        }
    }
}
