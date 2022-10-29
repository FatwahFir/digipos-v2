<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kecamatans')->insert(array(
            [
                'nama_kecamatan' => 'Widasari',
                'kodepos' => '45271'
            ],
            [
                'nama_kecamatan' => 'Jatibarang',
                'kodepos' => '45063'
            ],
            [
                'nama_kecamatan' => 'Lohbener',
                'kodepos' => '40134'
            ],
            [
                'nama_kecamatan' => 'Lobener',
                'kodepos' => '45845'
            ]
        ));
    }
}
