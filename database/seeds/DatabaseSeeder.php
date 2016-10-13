<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeders = collect([
            UsersTableSeeder::class,
            CountriesTableSeeder::class,
            ProvincesTableSeeder::class,
            CitiesTableSeeder::class,
            OrganizationsTableSeeder::class,
            OccupationsTableSeeder::class,
            CategorySkillSeeder::class,
            ProjectsTableSeeder::class,
            SkillsTableSeeder::class,
            OccupationsTableSeeder::class,
            EducationsTableSeeder::class,
            CertificationsTableSeeder::class
        ]);

        $seeders->each(function (string $seederName) {
            $this->call($seederName);
        });
    }
}
