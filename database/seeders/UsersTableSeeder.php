<?php

namespace Database\Seeders;

use App\Models\User ;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userFactory = new UserFactory();
        $data = $userFactory->definition();
        foreach ($data as $val)
        {
            User::create($val);
        }
    }
}
