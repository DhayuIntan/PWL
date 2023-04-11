<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatkulModel extends Model
{
    use HasFactory;
    protected $table = 'matkul_models';
    protected $primaryKey = 'id_matkul';
    public $timestamps = false;
    protected $fillable = [
        'kode_matkul',
        'nama_matkul',
        'dosen_matkul',
        'sks',
    ];
}
