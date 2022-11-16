<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KsPestisidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ks_pestisidas')->insert([
            'lokasi_keterangan' => 'Sawah Pak Riza',
            'ks_pestisida_nama' => 'Pestisida 1',
            'ks_pestisida_tgl_semprot' => '2022-12-12',
            'ks_pestisida_jumlah_takaran' => '2',
            'ks_pestisida_keterangan' => 'Pestisida bagus'
        ]);

    }
}
