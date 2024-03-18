<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
//        User::factory()->create();
        $this->call([
            UsersTableSeeder::class,
            AcademicQualificationSeeder::class,
            SpecialQualificationSeeder::class,
            SkillSummarySeeder::class,

        ]);
    }
}
