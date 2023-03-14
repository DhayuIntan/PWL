<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen_models')->insert([[
            'nidn' => '2141720145',
            'nama_dosen' => 'Putri Ningtyas, S.Kom., MT.',
            'jenis_kelamin' => 'perempuan',
            'kota_lahir' => 'Malang',
            'tanggal_lahir' => fake()->dateTime(),
            'prodi_dosen' => 'Teknik Informatika',
            'pendidikan_dosen' => 'S2',
            'status_dosen' => 'dosen tetap',
            'alamat' => 'Jl.Bunga no.1',
            'no_telp' => '0812524279',
        ],
        [
            'nidn' => '2142792745',
            'nama_dosen' => 'Dr.Putra Santoso, S.Kom., MT.',
            'jenis_kelamin' => 'laki-laki',
            'kota_lahir' => 'Bali',
            'tanggal_lahir' => fake()->dateTime(),
            'prodi_dosen' => 'Teknik Informatika',
            'pendidikan_dosen' => 'S3',
            'status_dosen' => 'dosen tetap',
            'alamat' => 'Jl.Soekarno no.12',
            'no_telp' => '0832824929',
        ],
        [
            'nidn' => '2141218745',
            'nama_dosen' => 'Chandra Kirana, S.Kom., MT.',
            'jenis_kelamin' => 'perempuan',
            'kota_lahir' => 'Malang',
            'tanggal_lahir' => fake()->dateTime(),
            'prodi_dosen' => 'Teknik Informatika',
            'pendidikan_dosen' => 'S3',
            'status_dosen' => 'dosen tetap',
            'alamat' => 'Jl.Bunga no.11',
            'no_telp' => '0813824189',
        ],
        [
            'nidn' => '2197220145',
            'nama_dosen' => 'Sri Wahyuni, S.Pd, M.Pd',
            'jenis_kelamin' => 'perempuan',
            'kota_lahir' => 'yogyakarta',
            'tanggal_lahir' => fake()->dateTime(),
            'prodi_dosen' => 'Pendidikan Ekonomi',
            'pendidikan_dosen' => 'S2',
            'status_dosen' => 'dosen tetap',
            'alamat' => 'Jl.Bunga no.1',
            'no_telp' => '0812517291',
        ],
        [
            'nidn' => '2142810119',
            'nama_dosen' => 'Desi Arifa, S.Pd, ME',
            'jenis_kelamin' => 'perempuan',
            'kota_lahir' => 'Malang',
            'tanggal_lahir' => fake()->dateTime(),
            'prodi_dosen' => 'Ekonomi Pembangunan dan Perencanaan',
            'pendidikan_dosen' => 'S2',
            'status_dosen' => 'dosen honorer',
            'alamat' => 'Jl.Bunga no.12',
            'no_telp' => '0812227187',
        ]
        ]
    );
    }
}
