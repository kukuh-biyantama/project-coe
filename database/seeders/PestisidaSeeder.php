<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PestisidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pestisidas')->insert([
            [
                'pestisida_nama' => 'Emacel',
                'pestisida_keterangan' => '-'
            ],
            [
                'pestisida_nama' => 'Matador',
                'pestisida_keterangan' => '-'
            ],
            [
                'pestisida_nama' => 'Fenite',
                'pestisida_keterangan' => '-'
            ],
            [
                'pestisida_nama' => 'Curacron',
                'pestisida_keterangan' => '-'
            ],
            [
                'pestisida_nama' => 'Starelle',
                'pestisida_keterangan' => '-'
            ],
            [
                'pestisida_nama' => 'Prima-Cel',
                'pestisida_keterangan' => '-'
            ],
            [
                'pestisida_nama' => 'Lainnya',
                'pestisida_keterangan' => '-'
            ],
        ]);
    }
}
