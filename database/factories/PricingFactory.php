<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pricing>
 */
class PricingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                'name'              => 'BASIC',
                'price'             => 70.00,
                'description'       => 'Silver 2 page Vue, Laravel, php, Website or Landing Page',
                'delivery_time'     => '2 Days Delivery',
                'revision'          => 'Unlimited Revisions',
                'type'              => 1,
                'status_active'     => 1,
                'is_deleted'        => 1,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'name'              => 'STANDARD',
                'price'             => 800.00,
                'description'       => 'Gold 5 page Vue, Laravel, php, Website or Landing Page',
                'delivery_time'     => '7 Days Delivery',
                'revision'          => 'Unlimited Revisions',
                'type'              => 2,
                'status_active'     => 1,
                'is_deleted'        => 1,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'name'              => 'PREMIUM',
                'price'             => 3000.00,
                'description'       => 'Platinum 10 page Vue, Laravel, php, Website or Landing Page',
                'delivery_time'     => '14 Days Delivery',
                'revision'          => 'Unlimited Revisions',
                'type'              => 3,
                'status_active'     => 1,
                'is_deleted'        => 1,
                'created_by'        => 1,
                'updated_by'        => null,
            ]
        ];
    }
}
