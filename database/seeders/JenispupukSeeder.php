<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenispupukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenispupuks')->insert([
            [
                'jenispupuk_nama' => 'Organik',
                'jenispupuk_keterangan' => '-'
            ],
            [
                'jenispupuk_nama' => 'Anorganik',
                'jenispupuk_keterangan' => '-'
            ]
        ]);
    }
}
