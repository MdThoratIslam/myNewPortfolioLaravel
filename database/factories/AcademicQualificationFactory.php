<?php

namespace Database\Factories;
use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AcademicQualification>
 */
class AcademicQualificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // key set on academic_qualifications table value set is empty not use faker
        return [
            [
                'examTitle'             => 'SSC',
                'concentrationMajor'    => 'Business Studies',
                'instituteName'         => 'Kamlapur High School',
                'result'                => 3.31,
                'outOf'                 => 5,
                'startingYear'          => null,
                'endingYear'            => null,
                'passingYear'           => 2010,
                'achievement'           => 2010,
                'user_id'               => 1,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_by'            => null,
                'updated_at'            => null
            ],
            [
                'examTitle'             => 'Diploma in Engineering ',
                'concentrationMajor'    => 'Telecommunication',
                'instituteName'         => 'F.K. Polytechnic Institute',
                'result'                => 2.40,
                'outOf'                 => 4,
                'startingYear'          => 2010,
                'endingYear'            => 2015,
                'passingYear'           => 2015,
                'duration'              => 4,
                'achievement'           => 2015,
                'user_id'               => 1,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_by'            => null,
                'updated_at'            => null
            ],
            [
                'examTitle'             => 'Bachelor of Science (BSc)',
                'concentrationMajor'    => 'Computer Science & Information Technology (CSIT)',
                'instituteName'         => 'University of South Asia',
                'result'                => 3.35,
                'outOf'                 => 4,
                'startingYear'          => 2018,
                'endingYear'            => 2021,
                'passingYear'           => 2021,
                'duration'              => 4,
                'achievement'           => 2021,
                'user_id'               => 1,
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'created_at'            => UseHelpers::currentDateTime(),
                'updated_by'            => null,
                'updated_at'            => null
            ],
        ];

    }
}
