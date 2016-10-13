<?php

use App\Occupation;
use App\Organization;
use App\User;
use Illuminate\Database\Seeder;

class OccupationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var User $user */
        $user = User::first();
        $organization = Organization::whereName('Gaba Corporation')->first();
        $title = 'English Teacher';
        $start_date = '2006-03-01';
        $end_date = '2006-11-30';
        $description = 'Instruction in the proper use of English based on the setting, be it business or personal.';
        $duties = [];

        $occupation = Occupation::firstOrCreate([
            'user_id' => $user->id,
            'organization_id' => $organization->id,
            'title' => $title,
            'description' => $description,
            'start_date' => $start_date,
            'end_date' => $end_date
        ]);

        foreach ($duties as $duty_description) {
            $duty = [
                'occupation_id' => $occupation->id,
                'description' => $duty_description
            ];
            App\Duty::firstOrCreate($duty);
        }

        $organization = Organization::whereName('NetApp, Inc.')->first();
        $title = 'Software Developer Intern';
        $start_date = '2010-06-01';
        $end_date = '2010-08-31';
        $description = 'Instruction in the proper use of English based on the setting, be it business or personal.';
        $duties = [];

        $occupation = Occupation::firstOrCreate([
            'user_id' => $user->id,
            'organization_id' => $organization->id,
            'title' => $title,
            'description' => $description,
            'start_date' => $start_date,
            'end_date' => $end_date
        ]);

        foreach ($duties as $duty_description) {
            $duty = [
                'occupation_id' => $occupation->id,
                'description' => $duty_description
            ];
            App\Duty::firstOrCreate($duty);
        }

        $organization = Organization::whereName('Microsoft Corporation')->first();
        $title = 'Software Developer';
        $start_date = '2011-07-01';
        $end_date = '2012-09-30';
        $description = 'Originally working in program management, I have transitioned to software development in test to support the product closer to the source code level. I support Microsoft by ensuring the robustness of the JDBC driver for SQL Server through merciless testing and rigorous bug filing.';
        $duties = [
            "Create and maintain Java-based code to test scenarios for JDBC",
            "Automate, kick off, and monitor test suites for product signoffs",
            "Monitor and filed bugs for performance test failures in daily test suite runs",
            "Add web reporting to show results for top benchmarks for use in biweekly meetings",
            "Design and implement code for libraries to capture performance metrics for SQL Server",
        ];

        $occupation = Occupation::firstOrCreate([
            'user_id' => $user->id,
            'organization_id' => $organization->id,
            'title' => $title,
            'description' => $description,
            'start_date' => $start_date,
            'end_date' => $end_date
        ]);

        foreach ($duties as $duty_description) {
            $duty = [
                'occupation_id' => $occupation->id,
                'description' => $duty_description
            ];
            App\Duty::firstOrCreate($duty);
        }

        $organization = Organization::whereName('iFixit')->first();
        $title = 'Web Stack Developer';
        $start_date = '2012-11-01';
        $end_date = '2013-07-30';
        $description = 'My work at iFixit includes developing backend solutions for iFixit\'s web site to improve performance and add functionality for customers and employees using the web site. I also add features to the frontend--most notably our new image markup system--to provide the customer a smoother interaction with our web site.';
        $duties = [
            "Research and implement closed- and open-source solutions for feature requests",
            "Rewrite various backend modules to attain 20%-50% speed increases in common operations",
            "Contribute to the open-source community through bug fixes and new features",
            "Coordinate community outreach and company-sponsored university events",
        ];

        $occupation = Occupation::firstOrCreate([
            'user_id' => $user->id,
            'organization_id' => $organization->id,
            'title' => $title,
            'description' => $description,
            'start_date' => $start_date,
            'end_date' => $end_date
        ]);

        foreach ($duties as $duty_description) {
            $duty = [
                'occupation_id' => $occupation->id,
                'description' => $duty_description
            ];
            App\Duty::firstOrCreate($duty);
        }

        $organization = Organization::whereName('ITECH Solutions')->first();
        $title = 'Software Engineer';
        $start_date = '2013-07-01';
        $end_date = '2014-08-31';
        $description = 'My main contributions to ITECH are client web site support (PHP, MySQL) and software development workflow advice. I code new features for existing client web sites, and aid in the design and implementation of web sites for new clients. In addition, I develop for our mobile apps using PhoneGap. In terms of workflow, I make recommendations for interfacing revision control systems with modern deployment processes to most efficiently test and deploy changes to client web sites.';
        $duties = [
            "Architect modern software engineering practices for safe and efficient site deployment",
            "Meet with new and existing clients to draw out requirements for their site and its features",
            "Develop web sites using internally-developed content management system",
            "Build custom mobile apps for clients using HTML/JavaScript and PhoneGap",
            "Implement features and build tests for RapidForge CMS",
        ];

        $occupation = Occupation::firstOrCreate([
            'user_id' => $user->id,
            'organization_id' => $organization->id,
            'title' => $title,
            'description' => $description,
            'start_date' => $start_date,
            'end_date' => $end_date
        ]);

        foreach ($duties as $duty_description) {
            $duty = [
                'occupation_id' => $occupation->id,
                'description' => $duty_description
            ];
            App\Duty::firstOrCreate($duty);
        }

        $organization = Organization::whereName('iPromote')->first();
        $title = 'Software Engineer';
        $start_date = '2014-08-01';
        $end_date = null;
        $description = '';
        $duties = [];

        $occupation = Occupation::firstOrCreate([
            'user_id' => $user->id,
            'organization_id' => $organization->id,
            'title' => $title,
            'description' => $description,
            'start_date' => $start_date,
            'end_date' => $end_date
        ]);

        foreach ($duties as $duty_description) {
            $duty = [
                'occupation_id' => $occupation->id,
                'description' => $duty_description
            ];
            App\Duty::firstOrCreate($duty);
        }
    }
}
