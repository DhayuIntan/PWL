<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa_MataKuliah;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaMatakuliah extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nilai = Mahasiswa_MataKuliah::where('mahasiswa_id', $id)->get();
        $mahasiswa = MahasiswaModel::where('id', $id)->first();
        $mahasiswamatakuliah = Mahasiswa_MataKuliah::with('mahasiswa', 'matakuliah')
            ->where('mahasiswa_id', $id)->get();
        return view('mahasiswa.nilai')
            ->with('mhs', $mahasiswa)
            ->with('mm', $mahasiswamatakuliah)
            ->with('nilai', $nilai);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
