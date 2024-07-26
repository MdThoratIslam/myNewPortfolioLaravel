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
        return
            [
                [
                    'portfolio_id'       => 1,
                    'portfolio_name'     => 'Web',
                    'Client'             => 'Dakbazar Bpodms',
                    'project_url'        => 'https://dakbazar.bpodms.gov.bd/',
                    'project_date'       => '2024-03-23',
                    'title'              => 'Dakbazar Bpodms',
                    'description'        => 'This is Dakbazar Bpodms E-commerce Website for Bangladesh Post Office Department ',
                    'image'              => json_encode(["dackbazarCover.png", "dackbazarFullPage.png"]),
                    'status_active'      => 1,
                    'is_delete'          => 0,
                    'created_by'         => 1,
                    'updated_by'         => null,
                    'created_at'         => currentDateTime(),
                    'updated_at'         => null
                ],
                [
                    'portfolio_id'       => 1,
                    'portfolio_name'     => 'Web',
                    'Client'             => 'Moss Group',
                    'project_url'        => 'https://mossgroupbd.com/',
                    'project_date'       => '2024-03-23',
                    'title'              => 'Moss Group',
                    'description'        => 'Description 2',
                    'image'              => json_encode(["mossGroupCover.png", "mossGroupFull.png"]),
                    'status_active'      => 1,
                    'is_delete'          => 0,
                    'created_by'         => 1,
                    'updated_by'         => null,
                    'created_at'         => currentDateTime(),
                    'updated_at'         => null
                ],
                [
                    'portfolio_id'       => 1,
                    'portfolio_name'     => 'Web',
                    'Client'             => 'MOSS REAL ESTATE LTD',
                    'project_url'        => 'http://mossestateglobal.com/',
                    'project_date'       => '2024-03-23',
                    'title'              => 'MOSS REAL ESTATE LTD',
                    'description'        => 'Description 2',
                    'image'              => json_encode(["mossRealEasteadCover.png", "mossRealEasteadFull.png"]),
                    'status_active'      => 1,
                    'is_delete'          => 0,
                    'created_by'         => 1,
                    'updated_by'         => null,
                    'created_at'         => currentDateTime(),
                    'updated_at'         => null
                ],


                [
                    'portfolio_id'       => 2,
                    'portfolio_name'     => 'API',
                    'Client'             => 'Ekdak',
                    'project_url'        => 'https://ekdak.com/',
                    'project_date'       => '2024-05-30',
                    'title'              => 'Ekdak',
                    'description'        => 'Api Set',
                    'image'              => json_encode(['ekdakCover.png', 'ekdakCover.png']),
                    'status_active'      => 1,
                    'is_delete'          => 0,
                    'created_by'         => 1,
                    'updated_by'         => null,
                    'created_at'         => currentDateTime(),
                    'updated_at'         => null
                ],
                [
                    'portfolio_id'       => 2,
                    'portfolio_name'     => 'API',
                    'Client'             => 'Booking BPODMS',
                    'project_url'        => 'https://booking.bpodms.gov.bd',
                    'project_date'       => '2024-05-30',
                    'title'              => 'Booking BPODMS',
                    'description'        => 'Database Management System for Bangladesh Post Office Department (BPODMS) and Booking System set to API',
                    'image'              => json_encode(['BPODMSCOVer.png', 'BPODMS.png']),
                    'status_active'      => 1,
                    'is_delete'          => 0,
                    'created_by'         => 1,
                    'updated_by'         => null,
                    'created_at'         => currentDateTime(),
                    'updated_at'         => null
                ],

                [
                    'portfolio_id'       => 3,
                    'portfolio_name'     => 'ERP',
                    'Client'             => 'Logic Sostware Ltd',
                    'project_url'        => 'https://www.logicsoftbd.com/',
                    'project_date'       => '2024-03-23',
                    'title'              => 'Logic Sostware Ltd',
                    'description'        => 'This is a Garments ERP Software for Logic Sostware Ltd and it is a complete solution for Garments ERP Software',
                    'image'              => json_encode(['logicSoftware.jpg', 'ERP-Software-1.jpg']),
                    'status_active'      => 1,
                    'is_delete'          => 0,
                    'created_by'         => 1,
                    'updated_by'         => null,
                    'created_at'         => currentDateTime(),
                    'updated_at'         => null
                ],
                [
                    'portfolio_id'       => 3,
                    'portfolio_name'     => 'ERP',
                    'Client'             => 'Bepari Bazaar Private Ltd',
                    'project_url'        => 'http://www.beparibazaar.com/',
                    'project_date'       => '2022-01-01',
                    'title'              => 'Bepari Bazaar Private Ltd',
                    'description'        => 'Bepari Bazaar Private Ltd. is a Supply chain technology company working with Small businesses such as',
                    'image'              => json_encode(['bapari_bazer.png', 'bepariBazarLogin.png']),
                    'status_active'      => 1,
                    'is_delete'          => 0,
                    'created_by'         => 1,
                    'updated_by'         => null,
                    'created_at'         => currentDateTime(),
                    'updated_at'         => null
                ]
            ];

    }
}
