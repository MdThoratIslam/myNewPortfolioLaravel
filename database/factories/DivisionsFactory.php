<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Divisions\Divisions>
 */
class DivisionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return
            [
                [
                    'name' => 'Dhaka',
                    'bn_name' => 'ঢাকা',
                    'url' => 'dhaka',
                    'code' => 50,
                    'lat' => 23.810332,
                    'long' => 90.412518,
                    'status_active' => 1,
                    'is_delete' => 0,
                ],
                [
                    'name' => 'Chittagong',
                    'bn_name' => 'চট্টগ্রাম',
                    'url' => 'chittagong',
                    'code' => 60,
                    'lat' => 22.356851,
                    'long' => 91.783182,
                    'status_active' => 1,
                    'is_delete' => 0,
                ],
                [
                    'name' => 'Rajshahi',
                    'bn_name' => 'রাজশাহী',
                    'url' => 'rajshahi',
                    'code' => 70,
                    'lat' => 24.363589,
                    'long' => 88.624135,
                    'status_active' => 1,
                    'is_delete' => 0,
                ],
                [
                    'name' => 'Khulna',
                    'bn_name' => 'খুলনা',
                    'url' => 'khulna',
                    'code' => 80,
                    'lat' => 22.845641,
                    'long' => 89.540328,
                    'status_active' => 1,
                    'is_delete' => 0,
                ],
                [
                    'name' => 'Barishal',
                    'bn_name' => 'বরিশাল',
                    'url' => 'barishal',
                    'code' => 90,
                    'lat' => 22.701002,
                    'long' => 90.353451,
                    'status_active' => 1,
                    'is_delete' => 0,
                ],
                [
                    'name' => 'Sylhet',
                    'bn_name' => 'সিলেট',
                    'url' => 'sylhet',
                    'code' => 100,
                    'lat' => 24.894929,
                    'long' => 91.868706,
                    'status_active' => 1,
                    'is_delete' => 0,
                ],
                [
                    'name' => 'Rangpur',
                    'bn_name' => 'রংপুর',
                    'url' => 'rangpur',
                    'code' => 110,
                    'lat' => 25.743892,
                    'long' => 89.275227,
                    'status_active' => 1,
                    'is_delete' => 0,
                ],
                [
                    'name' => 'Mymensingh',
                    'bn_name' => 'ময়মনসিংহ',
                    'url' => 'mymensingh',
                    'code' => 120,
                    'lat' => 24.747149,
                    'long' => 90.420273,
                    'status_active' => 1,
                    'is_delete' => 0,
                ]
            ];
    }
}
