<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserRolePermissionSeeder::class);
        $this->call(KecamatanSeeder::class);
        $this->call(DesaSeeder::class);
        $this->call(KeluargaSeeder::class);
        $this->call(PuskesmasSeeder::class);
        $this->call(PosyanduSeeder::class);
        $this->call(AnakSeeder::class);
        $this->call(GiziSeeder::class);
        $this->call(StatusGiziSeeder::class);
        $this->call(ImunisasiSeeder::class);
        $this->call(JenisImunisasiSeeder::class);
    }
}
