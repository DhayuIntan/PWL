<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show($param){
        return view('test', [
            'link' => $param
        ]);
    }

    public function param($i){
        echo "<a href='https://www.educastudio.com/news/$i'>link</a>";
    }
}
