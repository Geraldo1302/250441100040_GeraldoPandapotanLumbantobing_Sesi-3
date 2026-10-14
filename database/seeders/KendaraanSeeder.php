<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\Kendaraan;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datakendaraan = [
            [
            'plat_nomor'  => 'M 1234 AB',
            'merek'  => 'Toyota Avanza',
            'jenis'  => 'mobil',
            'tarif_perhari'  => 'Rp350.000',
            ],
                        [
            'plat_nomor'  => 'M 5678 CD',
            'merek'  => 'Honda Brio',
            'jenis'  => 'mobil',
            'tarif_perhari'  => 'Rp350.000',
            ],
                        [
            'plat_nomor'  => 'M 2468 EF',
            'merek'  => 'Honda Beat',
            'jenis'  => 'motor',
            'tarif_perhari'  => 'Rp80.000',
            ],
                        [
            'plat_nomor'  => 'M 1357 GH',
            'merek'  => 'Yamaha NMAX',
            'jenis'  => 'motor',
            'tarif_perhari'  => 'Rp120.000',
            ],
        ];
    }
}
