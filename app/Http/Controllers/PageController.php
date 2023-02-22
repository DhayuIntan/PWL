<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "Nama saya Dhayu Intan Nareswari dengan NIM 2141720026";
    }
    public function articles($id){
        return "Halaman artikel dengan id $id";
    }
}
