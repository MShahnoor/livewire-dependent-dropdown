<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\State;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // Create 10 countries
        $countries = [
            [
                'name' => 'France',
                'code' => 'FR',
                'phonecode' => '+33',
            ],
            [
                'name' => 'Germany',
                'code' => 'DE',
                'phonecode' => '+49',
            ],
            [
                'name' => 'Italy',
                'code' => 'IT',
                'phonecode' => '+39',
            ],
            [
                'name' => 'Spain',
                'code' => 'ES',
                'phonecode' => '+34',
            ],
            [
                'name' => 'United Kingdom',
                'code' => 'GB',
                'phonecode' => '+44',
            ],
            [
                'name' => 'Japan',
                'code' => 'JP',
                'phonecode' => '+81',
            ],
            [
                'name' => 'India',
                'code' => 'IN',
                'phonecode' => '+91',
            ],
            [
                'name' => 'Canada',
                'code' => 'CA',
                'phonecode' => '+1',
            ],
            [
                'name' => 'Australia',
                'code' => 'AU',
                'phonecode' => '+61',
            ],
            [
                'name' => 'Brazil',
                'code' => 'BR',
                'phonecode' => '+55',
            ],
        ];

        foreach ($countries as $countryData) {
            $country = Country::create($countryData);

            // Create 10 states for each country
            for ($i = 0; $i < 10; $i++) {
                $stateData = [
                    'country_id' => $country->id,
                    'name' => $country->name . ' State ' . ($i + 1),
                ];
                State::create($stateData);
            }
        }
    }
}
