<?php

namespace Database\Seeders;

use App\Models\Module\Module;
use Database\Factories\Module\ModuleFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $moduleFactory = new ModuleFactory();
        $data = $moduleFactory->definition();
        foreach ($data as $val) {
            Module::create($val);
        }
    }
}
