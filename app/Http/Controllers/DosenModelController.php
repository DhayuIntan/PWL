<?php

namespace App\Http\Controllers;

use App\Models\DosenModel;
use Illuminate\Http\Request;

class DosenModelController extends Controller
{
    public function index(){
        $dosen = DosenModel::all();
        return view('js4.dosen', ['dosen' => $dosen]);
    }
}
