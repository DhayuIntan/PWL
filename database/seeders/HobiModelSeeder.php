<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi_models')->insert([[
            'nama_siswa' => 'Salsabila Kirana',
            'alamat' => 'Jl.Matahari no.19',
            'hobi' => 'Berenang',
            'prestasi' => 'Juara 2 Berenang Tingkat Kota Malang'
        ],
        [
            'nama_siswa' => 'Mawar Eva',
            'alamat' => 'Jl.Melati no.1',
            'hobi' => 'Bermain Piano',
            'prestasi' => 'Juara 1 Piano Classic tingkat Nasional'
        ],
        [
            'nama_siswa' => 'Rudi Andrika Husada',
            'alamat' => 'Jl.Gagak Hitam no.8',
            'hobi' => 'Taekwondo',
            'prestasi' => 'Juara 3 Taekwondo Tingkat Jawa Timur'
        ],
        [
            'nama_siswa' => 'Sultan Adam',
            'alamat' => 'Jl.Soekarno Hatta no.12',
            'hobi' => 'Belajar',
            'prestasi' => 'Juara 2 olimpiade Fisika Tingkat Jawa Barat'
        ],
        [
            'nama_siswa' => 'Ananda Putri',
            'alamat' => 'Jl.Lavender no.7',
            'hobi' => 'Menyanyi',
            'prestasi' => 'Juara 1 Menyanyi Tingkat Kota Malang'
        ],
        ]
    );
    }
}
