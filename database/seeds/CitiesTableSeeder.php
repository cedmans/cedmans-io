<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities_info = [
            'California' => [
                'San Luis Obispo',
                'Sunnyvale'
            ],
            'Washington' => [
                'Redmond'
            ],
            'Tokyo' => [
                'Toshima-ku'
            ]
        ];

        foreach ($cities_info as $province_name => $cities) {
            $province = \App\Province::whereName($province_name)->firstOrFail();

            foreach ($cities as $city_name) {
                \App\City::firstOrCreate(['province_id' => $province->id, 'name' => $city_name]);
            }
        }
    }
}
