<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('models')->insert([
            [
                'id' => 1,
                'name' => 'ワニワニパニックＲ',
                'image_url' => '#',
                'since' => "2020年6月",
                'created_at' => date("Y-m-d H:i:s"),
            ],
        ]);
    }
}
