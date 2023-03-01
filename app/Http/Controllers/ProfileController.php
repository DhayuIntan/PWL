<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($param, $ttl, $alamat){
        $ex = [
            'nama' => $param,
            'ttl' => $ttl,
            'alamat' => $alamat
    ];

        return view('profile', compact(['ex']));
    }
}
