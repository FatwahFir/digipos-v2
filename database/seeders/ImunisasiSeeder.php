<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImunisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imunisasi')->insert(array(
            [
                'tgl_imunisasi' => '2023-01-02',
                'id_jenis' => 1,
                'id_pasien' => 1,
            ]
        ));
    }
}
