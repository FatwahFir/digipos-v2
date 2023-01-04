<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusGiziSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_gizi')->insert(array(
            [
                'bb_u' => 'BG',
                'pb_tb_u' => 'BP',
                'bb_pb_tb' => 'O',
            ],
        ));
    }
}
