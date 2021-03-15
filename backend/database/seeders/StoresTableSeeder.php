<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            [
                'name' => 'ラウンドワン東淀川',
                'location' => '大阪府',
                'status' => "1000",
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
