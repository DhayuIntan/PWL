<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul_models')->insert([[
            'kode_matkul' => 'RTI214001',
            'nama_matkul' => 'Kewarganegaraan',
            'dosen_matkul' => 'Widaningsih Condrowardhani, SH, MH.',
            'sks' => '2'
        ],
        [
            'kode_matkul' => 'RTI214002',
            'nama_matkul' => 'Analisis dan Desain Berorentasi Objek',
            'dosen_matkul' => 'Ariadi Retno Ririd, S.Kom., MT.',
            'sks' => '2'
        ],
        [
            'kode_matkul' => 'RTI214003',
            'nama_matkul' => 'Manajemen Proyek',
            'dosen_matkul' => 'Candra Bella Vista, S.Kom., MT.',
            'sks' => '2'
        ],
        [
            'kode_matkul' => 'RTI214004',
            'nama_matkul' => 'Proyek 1',
            'dosen_matkul' => 'Rudy Ariyanto, ST., M.Cs.',
            'sks' => '3'
        ],
        [
            'kode_matkul' => 'RTI214005',
            'nama_matkul' => 'Business Intelligence',
            'dosen_matkul' => 'Endah Septa Sintiya. SPd., MKom.',
            'sks' => '2'
        ],
        [
            'kode_matkul' => 'RTI214006',
            'nama_matkul' => 'Jaringan Komputer',
            'dosen_matkul' => 'Kadek Suarjuna Batubulan, S.Kom, MT',
            'sks' => '2'
        ],
        [
            'kode_matkul' => 'RTI214007',
            'nama_matkul' => 'Praktikum Jaringan Komputer',
            'dosen_matkul' => 'Kadek Suarjuna Batubulan, S.Kom, MT',
            'sks' => '2'
        ],
        [
            'kode_matkul' => 'RTI214008',
            'nama_matkul' => 'Pemrograman Web Lanjut',
            'dosen_matkul' => 'Moch. Zawaruddin Abdullah, S.ST., M.Kom',
            'sks' => '3'
        ],
        [
            'kode_matkul' => 'RTI214009',
            'nama_matkul' => 'Statistik Komputasi',
            'dosen_matkul' => 'Elok Nur Hamdana, S.T., M.T',
            'sks' => '2'
        ],
        ]
    );
    }
}
