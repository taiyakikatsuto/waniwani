<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'test_user',
                'pref' => 39,
                'email' => 'example@com',
                'password' => Hash::make('password'),
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);

        DB::table('users')->insert([
            [
                'id' => 2,
                'name' => 'ワニ男',
                'pref' => 25,
                'email' => 'wanio@com',
                'password' => Hash::make('password'),
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);

        DB::table('users')->insert([
            [
                'id' => 3,
                'name' => 'ワニ美',
                'pref' => 14,
                'email' => 'wanimi@com',
                'password' => Hash::make('password'),
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);

        DB::table('users')->insert([
            [
                'id' => 4,
                'name' => 'ワニー・アリゲーター',
                'pref' => 1,
                'email' => 'wani@com',
                'password' => Hash::make('password'),
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);
        
    }
}
