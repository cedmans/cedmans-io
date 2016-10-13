<?php

use App\Country;
use App\Province;
use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country_provinces = [
            'United States of America' => [
                'California',
                'Washington'
            ],
            'Japan' => [
                'Tokyo'
            ]
        ];

        foreach($country_provinces as $country_name => $provinces) {
            $country = Country::whereName($country_name)->firstOrFail();
            foreach ($provinces as $province_name) {
                Province::firstOrCreate(['country_id' => $country->id, 'name' => "$province_name"]);
            }
        }
    }
}
