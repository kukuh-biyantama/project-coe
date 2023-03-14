<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerkpupukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merkpupuks')->insert([
            // organik
            [
                'jenispupuk_id' => '1',
                'merkpupuk_nama' => 'Organik 1',
                'merkpupuk_keterangan' => '-'
            ],
            [
                'jenispupuk_id' => '1',
                'merkpupuk_nama' => 'Organik 2',
                'merkpupuk_keterangan' => '-'
            ],
            [
                'jenispupuk_id' => '1',
                'merkpupuk_nama' => 'Organik 3',
                'merkpupuk_keterangan' => '-'
            ],

            // anorganik
            [
                'jenispupuk_id' => '2',
                'merkpupuk_nama' => 'Anorganik 1',
                'merkpupuk_keterangan' => '-'
            ],
            [
                'jenispupuk_id' => '2',
                'merkpupuk_nama' => 'Anorganik 2',
                'merkpupuk_keterangan' => '-'
            ],
            [
                'jenispupuk_id' => '2',
                'merkpupuk_nama' => 'Anorganik 3',
                'merkpupuk_keterangan' => '-'
            ]
        ]);
    }
}
