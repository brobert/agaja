<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $usersData = [
            [
                'name'      => 'Agnieszka',
                'surname'   => 'Janiec',
                'email'     => 'test.aga.janiec@gmail.com',
                'login'     => 'aga.janiec',
                'password'  => Hash::make('aga.janiec'),
            ],
            [
                'name'      => 'Aleksandra',
                'surname'   => 'Łanoszka',
                'email'     => 'test.ola.lanoszka@gmail.com',
                'login'     => 'ola.lanoszka',
                'password'  => Hash::make('ola.lanoszka'),
            ],
            [
                'name'      => 'Agata',
                'surname'   => 'Głowacka',
                'email'     => 'test_agata.glowacka@gmail.com',
                'login'     => 'agata.glowacka',
                'password'  => Hash::make('agata.glowacka'),
            ],
            [
                'name'      => 'Katarzyna',
                'surname'   => 'Głowacka',
                'email'     => 'test_kasia.glowacka@gmail.com',
                'login'     => 'kasia.glowacka',
                'password'  => Hash::make('kasia.glowacka'),
            ]

        ];

        foreach( $usersData as $user ) {
            App\User::create($user);
        }
    }
}
