<?php

use App\Education;
use App\Organization;
use App\User;
use Illuminate\Database\Seeder;

class EducationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        /** @var App\Organization $calpoly */
        $calpoly = Organization::whereName('California Polytechnic State University')->first();

        Education::firstOrCreate([
            'user_id' => $user->id,
            'organization_id' => $calpoly->id,
            'degree_type' => 'Bachelor of Science',
            'major' => 'Computer Science',
            'concentration' => 'Software Engineering',
            'conferral' => '2011-06-01'
        ]);
    }
}
