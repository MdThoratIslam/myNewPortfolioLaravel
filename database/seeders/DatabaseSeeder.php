<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            AboutSummarySeeder::class,
            AcademicQualificationSeeder::class,
            SpecialQualificationSeeder::class,
            SkillSummarySeeder::class,
            DivisionsSeeder::class,
            DistrictsSeeder::class,
            PoliceStationSeeder::class,
            FieldsOfSkillSeeder::class,
            EmploymentHistorySeeder::class,
            ResponsibilitiesSeeder::class,
            PortfolioSeeder::class,
            PortfolioDescribeSeeder::class,
            ModuleSeeder::class,
            SubModuleSeeder::class,
            ServiceSeeder::class,
            EventsSeeder::class,
            UserPersonalDetailSeeder::class,
            PricingSeeder::class,
            PricingDetailsSeeder::class,
            PostOfficeSeeder::class
        ]);
    }
}
