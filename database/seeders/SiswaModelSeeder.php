<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa_models')->insert([[
            'nim_siswa' => '2141720145',
            'nama_siswa' => 'Salsabila Kirana',
            'jenis_kelamin' => 'perempuan',
            'kota_lahir' => 'Malang',
            'tanggal_lahir' => fake()->dateTime(),
            'agama' => 'islam',
            'gol_darah' => 'A',
            'no_telp' => '081337442881',
            'email' => '2141720145@student.polinema.ac.id',
        ],
        [
            'nim_siswa' => '2041720038',
            'nama_siswa' => 'Mawar Eva',
            'jenis_kelamin' => 'perempuan',
            'kota_lahir' => 'Jakarta',
            'tanggal_lahir' => fake()->dateTime(),
            'agama' => 'kristen',
            'gol_darah' => 'B',
            'no_telp' => '081237449181',
            'email' => '2041720038@student.polinema.ac.id',
        ],
        [
            'nim_siswa' => '2141720028',
            'nama_siswa' => 'Rudi Andrika Husada',
            'jenis_kelamin' => 'laki-laki',
            'kota_lahir' => 'Surabaya',
            'tanggal_lahir' => fake()->dateTime(),
            'agama' => 'kristen',
            'gol_darah' => 'B',
            'no_telp' => '081237442192',
            'email' => '2141720028@student.polinema.ac.id',
        ],
        [
            'nim_siswa' => '2141720154',
            'nama_siswa' => 'Sultan Adam',
            'jenis_kelamin' => 'laki-laki',
            'kota_lahir' => 'Malang',
            'tanggal_lahir' => fake()->dateTime(),
            'agama' => 'islam',
            'gol_darah' => 'O',
            'no_telp' => '081337418281',
            'email' => '2141720154@student.polinema.ac.id',
        ],
        [
            'nim_siswa' => '2141720088',
            'nama_siswa' => 'Ananda Putri',
            'jenis_kelamin' => 'perempuan',
            'kota_lahir' => 'Malang',
            'tanggal_lahir' => fake()->dateTime(),
            'agama' => 'islam',
            'gol_darah' => 'AB',
            'no_telp' => '081318242881',
            'email' => '2141720088@student.polinema.ac.id',
        ],
        ]
    );
    }
}
