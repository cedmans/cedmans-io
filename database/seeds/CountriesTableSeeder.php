<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            'United States of America',
            'Japan'
        ])->each(function ($country_name) {
            Country::firstOrCreate(['name' => $country_name]);
        });
    }
}
