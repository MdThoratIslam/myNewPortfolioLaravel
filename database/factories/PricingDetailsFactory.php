<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pricing\Pricing_details>
 */
class PricingDetailsFactory extends Factory
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
                'pricing_id'        => 1,
                'name'              => '2 Pages',
                'icon'              => 'check',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'pricing_id'        => 1,
                'name'              => 'Design Customization',
                'xmark'             => 'xmark',
                'icon'              => 'xmark',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'pricing_id'        => 1,
                'name'              => 'Content Upload',
                'xmark'             => 'xmark',
                'icon'              => 'xmark',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'pricing_id'        => 1,
                'name'              => 'Responsive design',
                'icon'              => 'check',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'pricing_id'        => 1,
                'name'              => 'Source Code',
                'icon'              => 'check',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'pricing_id'        => 1,
                'name'              => 'Detailed code comments ',
                'xmark'             => 'xmark',
                'icon'              => 'xmark',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
//====================================================================================================================
            [
                'pricing_id'        => 2,
                'name'              => '5 Pages',
                'icon'              => 'check',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'pricing_id'        => 2,
                'name'              => 'Design Customization',
                'icon'              => 'check',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'pricing_id'        => 2,
                'name'              => 'Content Upload',
                'icon'              => 'check',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'pricing_id'        => 2,
                'name'              => 'Responsive design',
                'icon'              => 'check',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'pricing_id'        => 2,
                'name'              => 'Source Code',
                'icon'              => 'check',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'pricing_id'        => 2,
                'name'              => 'Detailed code comments ',
                'xmark'             => 'xmark',
                'icon'              => 'check',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            //================================
            [
                'pricing_id'        => 3,
                'name'              => '10 Pages',
                'icon'              => 'check',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'pricing_id'        => 3,
                'name'              => 'Design Customization',
                'icon'              => 'check',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'pricing_id'        => 3,
                'name'              => 'Content Upload',
                'icon'              => 'check',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'pricing_id'        => 3,
                'name'              => 'Responsive design',
                'icon'              => 'check',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'pricing_id'        => 3,
                'name'              => 'Source Code',
                'icon'              => 'check',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ],
            [
                'pricing_id'        => 3,
                'name'              => 'Detailed code comments ',
                'icon'              => 'check',
                'piority'           => 1,
                'status_active'     => 1,
                'is_deleted'        => 0,
                'created_by'        => 1,
                'updated_by'        => null,
            ]
        ];
    }
}
