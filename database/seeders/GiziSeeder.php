<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GiziSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gizi')->insert(array(
            [
                'no_pemeriksaan_gizi' => 'G2023010200001',
                'usia' => 3,
                'pb_tb' => '59.00',
                'bb' => '7.50',
                'tgl_periksa' => '2023-01-02',
                'cara_ukur' => 1,
                'asi_eks' => 1,
                'vit_a' => 1,
                'validasi' => 1,
                'id_status_gizi' => 1,
                'id_pasien' => 1 
            ],
        ));
    }
}
