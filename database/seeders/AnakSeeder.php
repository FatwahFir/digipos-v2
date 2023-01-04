<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pasien')->insert(array(
            [
                'nik' => '21030873679',
                'nama_anak' => 'Khoirul',
                'tgl_lahir' => '2022-10-01',
                'jk' => 'laki-laki',
                'anak_ke' => 1,
                'bb_lahir' => 7,
                'pb_lahir' => 55,
                'kia' => 1,
                'imd' => 1,
                'no_kk' => '21030873671',
                'id_posyandu' => 1,
            ]
            ));
    }
}
