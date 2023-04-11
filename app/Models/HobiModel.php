<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HobiModel extends Model
{
    use HasFactory;
    protected $table = 'hobi_models';
    protected $primaryKey = 'id_siswa';
    public $timestamps = false;
    protected $fillable = [
        'nama_siswa',
        'alamat',
        'hobi',
        'prestasi',
    ];
}
