<?php

namespace Database\Factories;

use App\Models\PoliceStation;
use App\Models\PostOffice;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostOffice>
 */
class PostOfficeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    /*public function definition()
    {
        // Get an array of all division IDs
        $allPoliceStationIds = PoliceStation::pluck('id')->toArray();

        // Initialize an empty array to store the district data
        $policeStation = [];

        // API token and base URL for the API
        $apiToken = '1c4dc27192141d9c2e674b52e3bf8ae0d0afc3bd';
        $baseUrl = 'https://ekdak.com/thikana/pocode/post-offices?t=';

        // Loop through each division ID and fetch the district data
        foreach ($allPoliceStationIds as $policeStationId)
        {
            $apiUrl = $baseUrl . $policeStationId;
            $response = Http::withHeaders(['Authorization' => 'Token ' . $apiToken])->get($apiUrl);

            if ($response->successful()) {
                $data = $response->json();

                // Map the API data to the district model and append to the policeStation array
                $policeStation = array_merge($policeStation, collect($data['data'])->map(function ($district) use ($policeStationId)
                {
                    return [
                        'id'                 => $district['id'], // Assuming your database allows setting IDs
                        'police_station_id'  => $policeStationId,
                        'en_name'            => $district['en_name'],
                        'bn_name'            => $district['bn_name'],
                        'slug'               => $district['slug'],
                        'code'               => $district['code'],
                    ];
                })->toArray());
            } else {
                throw new \Exception('Failed to fetch policeStation from API for division ID: ' . $policeStationId);
            }
        }

        return $policeStation;
    }*/

    public function definition()
    {
        $allPoliceStationIds = PoliceStation::pluck('id')->toArray();
        $existingEnNames = PostOffice::pluck('en_name')->toArray();
        $existingBnNames = PostOffice::pluck('bn_name')->toArray();
        $existingSlugs   = PostOffice::pluck('slug')->toArray();

        $newPostOffices = [];
        $apiToken = '1c4dc27192141d9c2e674b52e3bf8ae0d0afc3bd';
        $baseUrl = 'https://ekdak.com/thikana/pocode/post-offices?t=';

        foreach ($allPoliceStationIds as $policeStationId) {
            $apiUrl = $baseUrl . $policeStationId;
            $response = Http::withHeaders(['Authorization' => 'Token ' . $apiToken])->get($apiUrl);

            if ($response->successful()) {
                $data = $response->json();

                if (isset($data['data']) && is_array($data['data'])) {
                    foreach ($data['data'] as $postOffice) {
                        $enName = $postOffice['en_name'];
                        $bnName = $postOffice['bn_name'];
                        $slug = $postOffice['slug'];

                        if (!in_array($slug, $existingSlugs)) {
                            try {
                                $newPostOffices[] = [
                                    'id'                 => $postOffice['id'],
                                    'police_station_id'  => $policeStationId,
                                    'en_name'            => $enName,
                                    'bn_name'            => $bnName,
                                    'slug'               => $slug,
                                    'code'               => $postOffice['code'],
                                    'created_at'         => now(),
                                    'updated_at'         => null,
                                ];

                                // Add to existing lists to prevent further duplicates in this run
                                $existingEnNames[] = $enName;
                                $existingBnNames[] = $bnName;
                                $existingSlugs[]   = $slug;
                            } catch (\Exception $e) {
                                // Handle exception if there's a duplicate entry
                                Log::error('Duplicate entry detected: ' . $e->getMessage());
                            }
                        }
                    }
                } else {
                    Log::error('Unexpected API response structure for police station ID: ' . $policeStationId);
                }
            } else {
                throw new \Exception('Failed to fetch post offices from API for police station ID: ' . $policeStationId);
            }
        }

        return $newPostOffices;
    }
}
