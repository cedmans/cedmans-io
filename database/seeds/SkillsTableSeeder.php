<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            'Web' => explode('|','LAMP|PHP|Ruby on Rails|Python|Node.js|AngularJS|EmberJS|JavaScript (jQuery, MooTools)'),
            'Desktop' => explode('|','Java|C#|C/C++'),
            'Databases' => explode('|','MySQL|PostgreSQL|SQL Server|SQLite|MongoDB'),
            'Workflow' => explode('|','Agile|SCRUM|Repository-Centric Development (Git)|Deployment'),
        ];

        $user_id = App\User::first()->id;

        foreach ($skills as $category_name => $skill_info) {
            $category = App\CategorySkill::whereName($category_name)->first();

            foreach ($skill_info as $skill_name) {
                App\Skill::create([
                    'user_id' => $user_id,
                    'category_skill_id' => $category->id,
                    'name' => $skill_name
                ]);
            }
        }
    }
}
