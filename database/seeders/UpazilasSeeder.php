<?php

namespace Database\Seeders;

use App\Models\Upazilas;
use Database\Factories\UpazilasFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UpazilasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $upazilaFactory = new UpazilasFactory();
        $data = $upazilaFactory->definition();
        foreach ($data as $val) {
            Upazilas::create($val);
        }
    }
}
