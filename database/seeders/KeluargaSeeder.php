<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluargas')->insert(array(
            [
                'no_kk' => '21030873671',
                'nik_ayah' => '2130048123',
                'nik_ibu' => '2134048123',
                'nama_ayah' => 'Atmaedi',
                'nama_ibu' => 'Kuneri',
                'no_telp' => '083821177545',
                'status_ekonomi' => '1',
                'alamat' => 'Bojong Jati',
                'id_desa' => 1
            ]
            ));
    }
}
