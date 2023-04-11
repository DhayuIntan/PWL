<?php

namespace App\Http\Controllers;

use App\Models\HobiModel;
use Illuminate\Http\Request;

class HobiModelController extends Controller
{
    public function index()
    {
        $hobi = HobiModel::all();
        return view('hobi.hobi', ['hobi' => $hobi]);
    }


    public function create()
    {
        return view('hobi.create_hobi', ['urlform' => url('/hobi')]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'hobi' => 'required|string|max:100',
            'prestasi' => 'required|string|max:100',
        ]);

        HobiModel::create($request->except(['_token']));
        return redirect('/hobi')
            ->with('success', 'Hobi Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $hobi = HobiModel::find($id);
        return view('hobi.create_hobi', ['urlform' => url("/hobi/" . $id), 'hobi' => $hobi]);
    }

    public function update(Request $request,  $id)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'hobi' => 'required|string|max:100',
            'prestasi' => 'required|string|max:100',
        ]);

        $requestData = $request->except(['_token', '_method']);
        $requestData['id_siswa'] = $id;

        $data = HobiModel::where('id_siswa', '=', $id)->update($requestData);
        return redirect('/hobi')
            ->with('success', 'Hobi Berhasil Diedit');
    }

    public function destroy($id)
    {
        $requestData['id_siswa'] = $id;

        HobiModel::where('id_siswa', '=', $id)->delete();
        return redirect('/hobi')
            ->with('success', 'Hobi Berhasil Dihapus');
    }
}

