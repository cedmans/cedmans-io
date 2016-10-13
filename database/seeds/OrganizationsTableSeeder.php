<?php

use App\City;
use App\Country;
use App\Location;
use App\Organization;
use App\Province;
use Illuminate\Database\Seeder;

class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $japan = Country::firstOrCreate(['name' => 'Japan']);
        $usa = Country::firstOrCreate(['name' => 'United States of America']);

        $slo = City::firstOrCreate(['name' => 'San Luis Obispo']);
        $tokyo = Province::firstOrCreate(['name' => 'Tokyo']);
        $toshima = City::firstOrCreate(['name' => 'Toshima-ku']);
        $california = Province::firstOrCreate(['name' => 'California']);
        $sunnyvale = City::firstOrCreate(['name' => 'Sunnyvale']);
        $washington = Province::firstOrCreate(['name' => 'Washington']);
        $redmond = City::firstOrCreate(['name' => 'Redmond']);

        $organizations_info = [
            'California Polytechnic State University' => [
                'country_id' => $usa->id,
                'province_id' => $california->id,
                'city_id' => $slo->id,
                'address_one' => '1 Grand Avenue',
                'postal_code' => '93407'
            ],
            'Gaba Corporation' => [
                'country_id' => $japan->id,
                'province_id' => $tokyo->id,
                'city_id' => $toshima->id,
                'address_one' => '1-11-1 Nishiikebukuro',
                'address_two' => 'Metropolitan Plaza Building 20F',
                'postal_code' => '171-0021'
            ],
            'NetApp, Inc.' => [
                'country_id' => $usa->id,
                'province_id' => $california->id,
                'city_id' => $sunnyvale->id,
                'address_one' => '475 East Java Drive',
                'postal_code' => '94089'
            ],
            'Microsoft Corporation' => [
                'country_id' => $usa->id,
                'province_id' => $washington->id,
                'city_id' => $redmond->id,
                'address_one' => '1 Microsoft Way',
                'postal_code' => '98052'
            ],
            'iFixit' => [
                'country_id' => $usa->id,
                'province_id' => $california->id,
                'city_id' => $slo->id,
                'address_one' => '1330 Monterey Street',
                'postal_code' => '93401'
            ],
            'ITECH Solutions' => [
                'country_id' => $usa->id,
                'province_id' => $california->id,
                'city_id' => $slo->id,
                'address_one' => '811 El Capitan Way',
                'address_two' => 'Suite 110',
                'postal_code' => '93401'
            ],
            'iPromote' => [
                'country_id' => $usa->id,
                'province_id' => $california->id,
                'city_id' => $slo->id,
                'address_one' => '3000 Broad Street',
                'address_two' => 'Suite 115',
                'postal_code' => '93401'
            ]
        ];

        foreach ($organizations_info as $org_name => $location_info) {
            $location = Location::firstOrCreate($location_info);
            Organization::firstOrCreate([
                'location_id' => $location->id,
                'name' => $org_name
            ]);
        }
    }
}
