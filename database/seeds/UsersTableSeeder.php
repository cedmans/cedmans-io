<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'name' => 'Cedric Wienold',
            'email' => 'cwienold@gmail.com',
            'password' => '$2y$10$0drZF2uhcK33K./CqZvzKu8r4DH8IFnPk3HIYl/lBlOwg7z9y7U0K',
            'created_at' => '1985-10-05 00:00:00'
        ]);
    }
}
