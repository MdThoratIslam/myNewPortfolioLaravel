<?php
namespace Database\Seeders;
use App\Models\SkillSummary\SkillSummary;
use Database\Factories\SkillSummaryFactory;
use Illuminate\Database\Seeder;

class SkillSummarySeeder extends Seeder
{
    public function run(): void
    {
        $skillSummaryFactory    = new SkillSummaryFactory();
        $data                   = $skillSummaryFactory->definition();
        foreach ($data as $val)
        {
            SkillSummary::create($val);
        }
    }
}
