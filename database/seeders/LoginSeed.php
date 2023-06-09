<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class LoginSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => 'Ghaitza',
        //     'email' => 'itza@gmail.com',
        //     'password' => '1234',
        //     'role' => '1'
        // ]);

        // DB::table('users')->insert([
        //     'name' => 'Eka',
        //     'email' => 'eka@gmail.com',
        //     'password' => '1234',
        //     'role' => '2'
        // ]);

        // DB::table('users')->insert([
        //     'name' => 'Abi',
        //     'email' => 'abi@gmail.com',
        //     'password' => '1234',
        //     'role' => '3'
        // ]);

        // DB::table('users')->insert([
        //     'name' => 'Zerlina',
        //     'email' => 'zer@gmail.com',
        //     'password' => '1234',
        //     'role' => '1'
        // ]);

        // DB::table('users')->insert([
        //     'name' => 'Evan',
        //     'email' => 'ev@gmail.com',
        //     'password' => '1234',
        //     'role' => '2'
        // ]);

        // DB::table('users')->insert([
        //     'name' => 'Raihan',
        //     'email' => 'han@gmail.com',
        //     'password' => '1234',
        //     'role' => '3'
        // ]);

        $users = [
            [
               'name'=>'Ghaitza',
               'email'=>'itza@gmail.com',
               'role'=>2, //ADMIN
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Eka',
               'email'=>'eka@gmail.com',
               'role'=> 1, //SELLER
               'password'=> bcrypt('123456'),
            ],
            [
               'name'=>'Abi',
               'email'=>'abi@gmail.com',
               'role'=>0, //BUYER
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }

    }
}
