<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        //admin

        DB::table('users')->insert([

        [
            'name'     => 'Admin',
            'username' => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'role'     => 'admin',
            'status'   => 'active'
        ],

    //agent
        [
            'name'     => 'Agent',
            'username' => 'agent',
            'email'    => 'agent@gmail.com',
            'password' => Hash::make('123'),
            'role'     => 'agent',
            'status'   => 'active'
        ],

    //users

        [
            'name'     => 'User',
            'username' => 'user',
            'email'    => 'user@gmail.com',
            'password' => Hash::make('123'),
            'role'     => 'user',
            'status'   => 'active'
        ]

    ]);


    }
}
