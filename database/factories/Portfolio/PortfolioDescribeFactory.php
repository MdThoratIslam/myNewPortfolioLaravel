<?php

namespace Database\Factories\Portfolio;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio\Portfolio_describe>
 */
class PortfolioDescribeFactory extends Factory
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
                'portfolio_id'       => 1,
                'portfolio_name'     => 'Web',
                'Client'             => 'Client 2',
                'project_url'        => 'https://www.google.com',
                'project_date'       => '2024-03-23',
                'title'              => 'Title 2',
                'description'        => 'Description 2',
                'image'              => json_encode(['portfolio-1.jpg', 'portfolio-2.jpg']),
                'status_active'      => 1,
                'is_delete'          => 0,
                'created_by'         => 1,
                'updated_by'         => null,
                'created_at'         => UseHelpers::currentDateTime(),
                'updated_at'         => null
            ],
            [
                'portfolio_id'       => 2,
                'portfolio_name'     => 'API',
                'Client'             => 'Client 3',
                'project_url'        => 'https://www.google.com',
                'project_date'       => '2024-03-23',
                'title'              => 'Title 3',
                'description'        => 'Description 3',
                'image'              => json_encode(['portfolio-3.jpg', 'portfolio-4.jpg']),
                'status_active'      => 1,
                'is_delete'          => 0,
                'created_by'         => 1,
                'updated_by'         => null,
                'created_at'         => UseHelpers::currentDateTime(),
                'updated_at'         => null
            ],
            [
                'portfolio_id'       => 3,
                'portfolio_name'     => 'ERP',
                'Client'             => 'Client 4',
                'project_url'        => 'https://www.google.com',
                'project_date'       => '2024-03-23',
                'title'              => 'Title 4',
                'description'        => 'Description 4',
                'image'              => json_encode(['portfolio-5.jpg', 'portfolio-6.jpg']),
                'status_active'      => 1,
                'is_delete'          => 0,
                'created_by'         => 1,
                'updated_by'         => null,
                'created_at'         => UseHelpers::currentDateTime(),
                'updated_at'         => null
            ]
        ];

    }
}
