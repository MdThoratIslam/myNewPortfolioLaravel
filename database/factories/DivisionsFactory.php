<?php

namespace Database\Factories;

use App\Models\Divisions\Divisions;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

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
    /*public function definition(): array
    {
        return [
            [
                'id' => 1,
                'en_name' => 'Dhaka',
                'bn_name' => 'Dhaka',
                'slug' => 'dhaka',
                'lat' => '',
                'long' => '',
                'url' => '',
            ],
            [
                'id' => 2,
                'en_name' => 'Chattogram',
                'bn_name' => 'Chattogram',
                'slug' => 'chattogram',
                'lat' => '',
                'long' => '',
                'url' => '',
            ],
            [
                'id' => 3,
                'en_name' => 'Khulna',
                'bn_name' => 'Khulna',
                'slug' => 'khulna',
                'lat' => '',
                'long' => '',
                'url' => '',
            ],
            [
                'id' => 4,
                'en_name' => 'Rajshahi',
                'bn_name' => 'Rajshahi',
                'slug' => 'rajshahi',
                'lat' => '',
                'long' => '',
                'url' => '',
            ],
            [
                'id' => 5,
                'en_name' => 'Sylhet',
                'bn_name' => 'Sylhet',
                'slug' => 'sylhet',
                'lat' => '',
                'long' => '',
                'url' => '',
            ],
            [
                'id' => 6,
                'en_name' => 'Barishal',
                'bn_name' => 'Barishal',
                'slug' => 'barishal',
                'lat' => '',
                'long' => '',
                'url' => '',
            ],
            [
                'id' => 7,
                'en_name' => 'Mymensingh',
                'bn_name' => 'Mymensingh',
                'slug' => 'mymensingh',
                'lat' => '',
                'long' => '',
                'url' => '',
            ],
            [
                'id' => 8,
                'en_name' => 'Rangpur',
                'bn_name' => 'Rangpur',
                'slug' => 'rangpur',
                'lat' => '',
                'long' => '',
                'url' => '',
            ],
        ];
    }*/

    protected $model = Divisions::class;

    public function definition()
    {
        $apiUrl = 'https://ekdak.com/thikana/pocode/divisions';
        $apiToken = '1c4dc27192141d9c2e674b52e3bf8ae0d0afc3bd';
        $response = Http::withHeaders(['Authorization' => 'Token ' . $apiToken])->get($apiUrl);

        if ($response->successful()) {
            $data = $response->json();
            return collect($data['data'])->map(function ($division) {
                return [
                    'id'            => $division['id'],
                    'en_name'       => $division['en_name'],
                    'bn_name'       => $division['bn_name'],
                    'slug'          => $division['slug'],
                ];
            })->toArray();
        } else {
            throw new \Exception('Failed to fetch divisions from API');
        }
    }

}
