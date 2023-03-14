<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use Illuminate\Http\Request;

class SiswaModelController extends Controller
{
    public function index(){
        $siswa = SiswaModel::all();
        return view('js4.siswa', ['siswa' => $siswa]);
    }
}
