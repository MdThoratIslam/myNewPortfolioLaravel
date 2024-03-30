<?php

namespace Database\Seeders;

use App\Models\UserPersonalDetail\UserPersonalDetail;
use Database\Factories\UserPersonalDetailFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPersonalDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userPersonalFactory = new UserPersonalDetailFactory();
        $data = $userPersonalFactory->definition();
        foreach ($data as $val){
            UserPersonalDetail::create($val);
        }
    }
}
