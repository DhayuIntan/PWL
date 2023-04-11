<?php

namespace App\Http\Controllers;

use App\Models\MatkulModel;
use Illuminate\Http\Request;

class MatkulModelController extends Controller
{
    public function index()
    {
        $matkul = MatkulModel::all();
        return view('matkul.matkul', ['matkul' => $matkul]);
    }


    public function create()
    {
        return view('matkul.create_matkul', ['urlform' => url('/matkul')]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matkul' => 'required|string|max:10',
            'nama_matkul' => 'required|string|max:100',
            'dosen_matkul' => 'required|string|max:200',
            'sks' => 'required|string|max:2',
        ]);

        MatkulModel::create($request->except(['_token']));
        return redirect('/matkul')
            ->with('success', 'Mata Kuliah Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $matkul = MatkulModel::find($id);
        return view('matkul.create_matkul', ['urlform' => url("/matkul/" . $id), 'matkul' => $matkul]);
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'kode_matkul' => 'required|string|max:10',
            'nama_matkul' => 'required|string|max:100',
            'dosen_matkul' => 'required|string|max:200',
            'sks' => 'required|string|max:2',
        ]);

        $requestData = $request->except(['_token', '_method']);
        $requestData['id_matkul'] = $id;

        $data = MatkulModel::where('id_matkul', '=', $id)->update($requestData);
        return redirect('/matkul')
            ->with('success', 'Mata Kuliah Berhasil Diedit');
    }

    public function destroy($id)
    {
        $requestData['id_matkul'] = $id;

        MatkulModel::where('id_matkul', '=', $id)->delete();
        return redirect('/matkul')
            ->with('success', 'Mata Kuliah Berhasil Dihapus');
    }
}
