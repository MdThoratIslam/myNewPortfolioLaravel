<?php
namespace Database\Factories;
use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmploymentHistory\EmploymentHistory>
 */
class EmploymentHistoryFactory extends Factory
{
    public function definition(): array
    {
        return [
            [
                'company_name'      => "Unique Eastern Pvt. Ltd. concern of Unique Group",
                'company_address'   => "",
                'company_phone'     => "",
                'company_email'     => "",
                'company_website'   => "",
                'areaOfExpertise'   => "",
                'designation_id'    => 1,
                'department_id'     => 2,
                'joinin_date'       => '2017-11-09',
                'leaving_date'      => "2020-05-01",
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => UseHelpers::currentDateTime(),
                'updated_at'        => null,
            ],
            [
                'company_name'      => "Logic Software Limited",
                'company_address'   => "Flat: A2, House: NWD 4B, Road-62, Gulshan-2 ,Dhaka-1212, Banglades.",
                'company_phone'     => "01909-299990",
                'company_email'     => "info@logicsoftbd.com",
                'company_website'   => "https://www.logicsoftbd.com/",
                'areaOfExpertise'   => "HTML, CSS, JavaScript, Oracle Database,PHP (OOP)",
                'designation_id'    => 3,
                'department_id'     => 2,
                'joinin_date'       => '2021-12-15',
                'leaving_date'      => "2022-07-31",
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => UseHelpers::currentDateTime(),
                'updated_at'        => null,
            ],
            [
                'company_name'      => "Blue Planet Group",
                'company_address'   => "House # 14, Road# 3, Sector# 6, Dhaka 1230",
                'company_phone'     => "02-58951473",
                'company_email'     => "",
                'company_website'   => "https://www.blueplanetgroup.com/",
                'areaOfExpertise'   => "HTML, CSS, Laravel and Vue.js, Oracle Database, PHP (OOP)",
                'designation_id'    => 5,
                'department_id'     => 3,
                'joinin_date'       => '2022-08-25',
                'leaving_date'      => "2023-11-07",
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => UseHelpers::currentDateTime(),
                'updated_at'        => null,

            ],
            [
                'company_name'      => "Smart Think",
                'company_address'   => "Flat: E1,House: 99,Road-04,Block: A,Banani,Dhaka-1213,Bangladesh.",
                'company_phone'     => "09654000400",
                'company_email'     => "info@smartthink.con.bd",
                'company_website'   => "",
                'areaOfExpertise'   => "API Development, Laravel Framework, Vue JS",
                'designation_id'    => 6,
                'department_id'     => 1,
                'joinin_date'       => '2023-11-09',
                'leaving_date'      => null,
                'user_id'           => 1,
                'created_by'        => 1,
                'updated_by'        => null,
                'created_at'        => UseHelpers::currentDateTime(),
                'updated_at'        => null,
            ],
        ];
    }
}
