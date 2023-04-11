<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeluargaModel extends Model
{
    use HasFactory;
    protected $table = 'keluarga_models';
    protected $primaryKey = 'id_keluarga';
    public $timestamps = false;
    protected $fillable = [
        'nama_wali',
        'alamat_wali',
        'nik_wali',
        'agama',
        'pendidikan_wali',
        'pekerjaan_wali',
        'hubungan',
    ];
}
