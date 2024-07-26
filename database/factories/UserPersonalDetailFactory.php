<?php

namespace Database\Factories;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserPersonalDetail\UserPersonalDetail>
 */
class UserPersonalDetailFactory extends Factory
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
                'user_id'               => 1, // Example: generating a random user_id between 1 and 100
                'father_name'           => 'Md Abu Hossain',
                'mother_name'           => 'Parvin Nahar',
                'present_area'          => '34/4, Ahammedbagh,',
                'present_police_station_id'    => 32, // Example: generating a random police_station_id between 1 and 10
                'present_district_id'   => 1, // Example: generating a random district_id between 1 and 20
                'present_division_id'   => 1, // Example: generating a random division_id between 1 and 5
                'parmament_area'        => 'Dhanua Sarkarbari, Kamalpur',
                'parmament_police_station_id'  => 477, // Example: generating a random police_station_id between 1
                // and 10
                'parmament_district_id' => 53, // Example: generating a random district_id between 1 and 20
                'parmament_division_id' => 4, // Example: generating a random division_id between 1 and 5
                'nid'                   => 6441413637, // Example: generating a random 9-digit NID
                'passport'              => 'A11982001', // Example: generating a random 9-digit passport number
                'birth_certificate'     => null, // Example: generating a random 9-digit birth certificate number
                'date_of_birth'         => '1995-05-04',
                'place_of_birth'        => 53,
                'nationality_id'        => 1, // Example: generating a random nationality_id between 1 and 10
                'religion_id'           => 1, // Example: generating a random religion_id between 1 and 5
                'blood_group_id'        => 7, // Example: generating a random blood_group_id between 1 and 4
                'marital_status_id'     => 2, // Example: generating a random marital_status_id between 1 and 3
                'gender_id'             => 1, // Example: generating a random gender_id between 1 and 2
                'height'                => 5 .' feet '. 10 . ' inc', // Example: generating a random height between 150 and 200 cm
                'weight'                => 72 . ' kg', // Example: generating a random weight between 50 and 100 kg
                'status_active'         => 1,
                'is_delete'             => 0, // Assuming default is not deleted
                'created_by'            => 1, // Example: generating a random created_by between 1 and 100
                'updated_by'            => null, // Example: generating a random updated_by between 1 and 100
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ]
        ];
    }
}
