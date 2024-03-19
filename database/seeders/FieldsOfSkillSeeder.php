<?php

namespace Database\Seeders;

use App\Models\FieldsOfSkill;
use Database\Factories\FieldsOfSkillFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldsOfSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fieldsOfSkillFactory = new FieldsOfSkillFactory();
        $data = $fieldsOfSkillFactory->definition();
        foreach ($data as $val) {
            FieldsOfSkill::create($val);
        }
    }
}
