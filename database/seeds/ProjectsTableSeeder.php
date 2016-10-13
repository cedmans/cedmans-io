<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = collect([
            [
                'user_id' => 1,
                'name' => '(unnamed)',
                'description' => 'Web site to generate custom flashcards for the Japanese Language Proficiency Test',
                'date' => '2014-01-01'
            ],
            [
                'user_id' => 1,
                'name' => 'RapidForge CMS',
                'description' => 'Framework for web designer-focused content management',
                'date' => '2014-01-01'
            ],
            [
                'user_id' => 1,
                'name' => 'Node Markup',
                'description' => 'Library to easily add emphasis (circles, rectangles) to images',
                'date' => '2013-01-01'
            ],
            [
                'user_id' => 1,
                'name' => 'Cal Poly Global Game Jam',
                'description' => 'Support students in a weekend of creating games',
                'date' => '2013-01-01'
            ],
            [
                'user_id' => 1,
                'name' => 'iRobot Wireless Mesh Networking',
                'description' => 'Build 802.11s library to connect mobile devices',
                'date' => '2010-01-01'
            ],
        ]);

        $projects->each(function ($project_info) {
            App\Project::firstOrCreate($project_info);
        });
    }
}
