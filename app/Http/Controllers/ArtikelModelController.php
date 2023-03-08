<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class ArtikelModelController extends Controller
{
    public function index(){
        $artikel = ArtikelModel::all();
        return view('artikel.index', ['artikel' => $artikel]);
    }
}
