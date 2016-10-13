<?php

use App\Certification;
use App\User;
use Illuminate\Database\Seeder;

class CertificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();

        $certs = [
            'JLPT N3 Certification' => [
                'authority' => 'The Japan Foundation and Japan Educational Exchanges and Services',
                'conferral' => '2014-01-25'
            ],
            'Oracle Certified Associate, Java SE 7 Programmer' => [
                'authority' => 'Oracle Corporation',
                'conferral' => '2013-10-12'
            ]
        ];

        foreach ($certs as $name => $info) {
            $authority = $info['authority'];
            $conferral = $info['conferral'];
            $user_id = $user->id;

            $cert = compact('user_id', 'name', 'authority', 'conferral');
            Certification::firstOrCreate($cert);
        }
    }
}
