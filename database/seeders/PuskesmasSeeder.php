<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PuskesmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('puskesmas')->insert(array(
            [
                'nama_puskesmas' => 'Puskesmas Widasari',
                'alamat' => 'Jalan By Pass Widasari 45271 Indramayu Jawa Barat',
                'id_kecamatan' => 1,
            ],
        ));
    }
}
