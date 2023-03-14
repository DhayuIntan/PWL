<?php

namespace App\Http\Controllers;

use App\Models\MatkulModel;
use Illuminate\Http\Request;

class MatkulModelController extends Controller
{
    public function index(){
        $matkul = MatkulModel::all();
        return view('js4.matkul', ['matkul' => $matkul]);
    }
}
