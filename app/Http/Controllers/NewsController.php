<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($param){
        return view('news', ['intan' => $param]);
    }
}
