<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class KeluargaModelController extends Controller
{
    public function index()
    {
        $keluarga = KeluargaModel::all();
        return view('keluarga.keluarga', ['keluarga' => $keluarga]);
    }


    public function create()
    {
        return view('keluarga.create_keluarga', ['urlform' => url('/keluarga')]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_wali' => 'required|string|max:100',
            'alamat_wali' => 'required|string|max:200',
            'nik_wali' => 'required|string|max:20',
            'agama' => 'required|in:islam,kristen,katolik,hindu,buddha,konghucu',
            'pendidikan_wali' => 'required|string|max:50',
            'pekerjaan_wali' => 'required|string|max:100',
            'hubungan' => 'required|string|max:100'
        ]);

        KeluargaModel::create($request->except(['_token']));
        return redirect('/keluarga')
            ->with('success', 'Data Keluarga Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $keluarga = KeluargaModel::find($id);
        return view('keluarga.create_keluarga', ['urlform' => url("/keluarga/" . $id), 'keluarga' => $keluarga]);
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'nama_wali' => 'required|string|max:100',
            'alamat_wali' => 'required|string|max:200',
            'nik_wali' => 'required|string|max:20',
            'agama' => 'required|in:islam,kristen,katolik,hindu,buddha,konghucu',
            'pendidikan_wali' => 'required|string|max:50',
            'pekerjaan_wali' => 'required|string|max:100',
            'hubungan' => 'required|string|max:100'
        ]);

        $requestData = $request->except(['_token', '_method']);
        $requestData['id_keluarga'] = $id;

        $data = KeluargaModel::where('id_keluarga', '=', $id)->update($requestData);
        return redirect('/keluarga')
            ->with('success', 'Data Keluarga Berhasil Diedit');
    }

    public function destroy($id)
    {
        $requestData['id_keluarga'] = $id;

        KeluargaModel::where('id_keluarga', '=', $id)->delete();
        return redirect('/keluarga')
            ->with('success', 'Data Keluarga Berhasil Dihapus');
    }
}
