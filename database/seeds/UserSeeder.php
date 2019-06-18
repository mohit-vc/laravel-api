<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('12345678');
        $users = [
            [
                'name' => 'Saurabh Sharma',
                'email' => 'saurabh.sharma@valuecoders.com',
                'password' => $password,
            ],
            [
                'name' => 'Mahima Dwivedi',
                'email' => 'mahima.dubey@valuecoders.com',
                'password' => $password,
            ],
        ];
        User::insert($users);
    }
}
