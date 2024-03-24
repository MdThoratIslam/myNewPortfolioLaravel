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
            /*
             Schema::create('portfolio_describes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('portfolio_id')->constrained('portfolios')->cascadeOnDelete();
            $table->string('portfolio_name');
            $table->string('Client')->nullable();
            $table->string('project_url')->nullable();
            $table->date('project_date')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->json('image')->nullable();
            $table->integer('status_active')->default(1);
            $table->integer('is_delete')->default(0);
            $table->foreignId('created_by')->constrained('users')->cascadeOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamps();
        });
            */
            [
                'portfolio_id'       => 1,
                'portfolio_name'     => 'Web',
                'Client'             => 'Client 2',
                'project_url'        => 'https://www.google.com',
                'project_date'       => '2024-03-23',
                'title'              => 'Title 2',
                'description'        => 'Description 2',
                'image'              => json_encode(['web1.jpg', 'web2.jpg']),
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
                'image'              => json_encode(['api1.jpg', 'api2.jpg']),
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
                'image'              => json_encode(['erp1.jpg', 'erp2.jpg']),
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
