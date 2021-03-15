<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        while ($i < 50) {
           
            DB::table('results')->insert([
                [
                    'user_id' => rand(2, 4),
                    'store_id' => 1,
                    'model_id' => 1,
                    'play_type' => 1,
                    'point' => rand(50, 100),
                    'bitten' => rand(0, 10),
                    'file_name' => "#",
                    'created_at' => date("Y-m-d H:i:s"),
                ],
            ]);

            $i++;
        }
    }
}
