<?php

namespace Database\Factories\Events;

use App\UseHelpers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Events\Events>
 */
class EventsFactory extends Factory
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
                'title'                 => 'New Year’s Day (Danish holiday)',
                'description'           => 'New Year’s Day (Danish holiday)',
                'start'                 => '2024-01-01',
                'end'                   => '2024-01-01',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Martyr’s Day & International Mother Language Day',
                'description'           => 'Martyr’s Day & International Mother Language Day',
                'start'                 => '2024-02-21',
                'end'                   => '2024-02-21',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Shab-e-Barat',
                'description'           => 'Shab-e-Barat',
                'start'                 => '2024-02-26',
                'end'                   => '2024-02-26',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Birthday of the Father of the Nation & National Children’s Day',
                'description'           => 'Birthday of the Father of the Nation & National Children’s Day',
                'start'                 => '2024-03-17',
                'end'                   => '2024-03-17',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Independence & National Day of Bangladesh',
                'description'           => 'Independence & National Day of Bangladesh',
                'start'                 => '2024-03-26',
                'end'                   => '2024-03-26',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Good Friday (Danish holiday)',
                'description'           => 'Good Friday (Danish holiday)',
                'start'                 => '2024-03-29',
                'end'                   => '2024-03-29',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Jumatul Bida',
                'description'           => 'Jumatul Bida',
                'start'                 => '2024-04-05',
                'end'                   => '2024-04-05',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Eid-ul-Fitr',
                'description'           => 'Eid-ul-Fitr',
                'start'                 => '2024-04-06',
                'end'                   => '2024-04-06',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Shab-e-Qadar',
                'description'           => 'Shab-e-Qadar',
                'start'                 => '2024-04-07',
                'end'                   => '2024-04-07',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Eid-ul-Fitr',
                'description'           => 'Eid-ul-Fitr',
                'start'                 => '2024-04-08',
                'end'                   => '2024-04-13',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Bangla New Year (Noboborsho)',
                'description'           => 'Bangla New Year (Noboborsho)',
                'start'                 => '2024-04-14',
                'end'                   => '2024-04-14',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'May Day',
                'description'           => 'May Day',
                'start'                 => '2024-05-01',
                'end'                   => '2024-05-01',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Buddha Purnima',
                'description'           => 'Buddha Purnima',
                'start'                 => '2024-05-22',
                'end'                   => '2024-05-22',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Eid-ul-Azha',
                'description'           => 'Eid-ul-Azha',
                'start'                 => '2024-06-16',
                'end'                   => '2024-06-18',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Ashura',
                'description'           => 'Ashura',
                'start'                 => '2024-07-17',
                'end'                   => '2024-07-17',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'National Mourning Day',
                'description'           => 'National Mourning Day',
                'start'                 => '2024-08-15',
                'end'                   => '2024-08-15',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Jonmastomi',
                'description'           => 'Jonmastomi',
                'start'                 => '2024-08-26',
                'end'                   => '2024-08-26',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Eid-e-Miladunnab',
                'description'           => 'Eid-e-Miladunnab',
                'start'                 => '2024-09-16',
                'end'                   => '2024-09-16',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Durgapuja',
                'description'           => 'Durgapuja',
                'start'                 => '2024-10-13',
                'end'                   => '2024-10-13',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Victory Day',
                'description'           => 'Victory Day',
                'start'                 => '2024-12-16',
                'end'                   => '2024-12-16',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Christmas Day (Danish holiday)',
                'description'           => 'Christmas Day (Danish holiday)',
                'start'                 => '2024-12-25',
                'end'                   => '2024-12-26',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],

            [
                'title'                 => 'My Birthday',
                'description'           => 'Birthday celebration',
                'start'                 => '2024-05-04',
                'end'                   => '2024-05-04',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
            [
                'title'                 => 'Wife Birthday',
                'description'           => 'Birthday celebration',
                'start'                 => '2024-10-20',
                'end'                   => '2024-10-20',
                'status_active'         => 1,
                'is_delete'             => 0,
                'created_by'            => 1,
                'updated_by'            => null,
                'created_at'            => currentDateTime(),
                'updated_at'            => null,
            ],
        ];
    }
}
