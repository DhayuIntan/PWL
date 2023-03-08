<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel_models')->insert([[
            'tema_artikel' => 'pendidikan',
            'judul_artikel' => 'Ada 2 Program Unggukan Transformasi Pendidikan Vokasi, hanya Mitra Industri doang yang Puas?',
            'penulis_artikel' => 'Malena',
            'tanggal_publikasi' => fake()->dateTime()
        ],
        [
            'tema_artikel' => 'politik',
            'judul_artikel' => 'Indonesia Jalin Kerjasama dengan Malaysia',
            'penulis_artikel' => 'Putri',
            'tanggal_publikasi' => fake()->dateTime()
        ],
        [
            'tema_artikel' => 'kebudayaan',
            'judul_artikel' => 'Indonesia Kenalkan Budaya Wayang',
            'penulis_artikel' => 'Suryo',
            'tanggal_publikasi' => fake()->dateTime()
        ],
        ]
    );
    }
}
