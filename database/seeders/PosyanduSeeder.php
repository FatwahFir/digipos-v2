<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PosyanduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posyandus')->insert(array(
            [
                'nama_posyandu' => 'Kiki Posyandu',
                'rw' => 5,
                'id_desa' => 1,
                'id_puskesmas' => 1,
            ]
            ));
    }
}
