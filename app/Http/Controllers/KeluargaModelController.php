<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class KeluargaModelController extends Controller
{
    public function index(){
        $keluarga = KeluargaModel::all();
        return view('js4.keluarga', ['keluarga' => $keluarga]);
    }
}
