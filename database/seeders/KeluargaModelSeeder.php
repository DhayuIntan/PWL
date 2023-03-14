<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga_models')->insert([[
            'nama_wali' => 'Hendra Susanto',
            'alamat_wali' => 'Jl.Magnolia no.8',
            'nik_wali' => '3573298181770005',
            'agama' => 'islam',
            'pendidikan_wali' => 'S3',
            'pekerjaan_wali' => 'PNS',
            'hubungan' => 'ayah'
        ],
        [
            'nama_wali' => 'Lala Rasidag',
            'alamat_wali' => 'Jl.Magnolia no.8',
            'nik_wali' => '3573298181770018',
            'agama' => 'islam',
            'pendidikan_wali' => 'D3',
            'pekerjaan_wali' => 'Ibu Rumah Tangga',
            'hubungan' => 'ibu'
        ]
        ]
    );
    }
}
