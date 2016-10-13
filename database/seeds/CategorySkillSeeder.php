<?php

use Illuminate\Database\Seeder;

class CategorySkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_names = collect(explode(' ', 'Desktop Web Databases Workflow'));

        $category_names->each(function ($category_name) {
            App\CategorySkill::firstOrCreate(['name'=>$category_name]);
        });
    }
}
