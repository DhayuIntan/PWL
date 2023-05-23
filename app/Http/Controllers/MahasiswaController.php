<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Kelas;
use App\Models\Mahasiswa_MataKuliah;
use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\HttpCache\Store;
use PDF;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = MahasiswaModel::with('kelas')->get();
        $paginate = MahasiswaModel::orderBy('id', 'asc')->paginate(3);
        return view('mahasiswa.mahasiswa', ['mhs' => $mhs, 'paginate' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('mahasiswa.create_mahasiswa', ['kelas' => $kelas])
            ->with('url_form', url('/mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|max:10|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'jk' => 'required|in:l,p',
            'tempat_lahir' => 'required|string|max:50',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'hp' => 'required|digits_between:6,15',
            'kelas_id' => 'required',
        ]);
        $foto_name = null;
        if ($request->file('image')) {
            $foto = $request->file('image');
            $foto_name = time() . '_' . $foto->getClientOriginalName();
            $foto_name = $request->file('image')->store('images', 'public');
            $request->merge([
                'foto' => $foto_name,
            ]);
        }
        $data = MahasiswaModel::create($request->except(['_token']));
        return redirect('/mahasiswa')
            ->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mhs = MahasiswaModel::with('kelas')->find($id);
        return view('mahasiswa.detail', ['mhs' => $mhs]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = MahasiswaModel::find($id);
        return view('mahasiswa.create_mahasiswa', [
            'url_form' => url("/mahasiswa/" . $id),
            'mhs' => $mahasiswa, 'kelas' => Kelas::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mhs = MahasiswaModel::find($id);

        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->jk = $request->id_kelas;
        $mhs->tempat_lahir = $request->tempat_lahir;
        $mhs->tanggal_lahir = $request->tanggal_lahir;
        $mhs->alamat = $request->alamat;
        $mhs->hp = $request->hp;
        $mhs->kelas_id = $request->kelas_id;

        if ($request->hasFile('image')) {
            if ($mhs->foto && Storage::exists('public/' . $mhs->foto)) {
                Storage::delete('public/' . $mhs->foto);
            }

            $image_name = $request->file('image')->store('images', 'public');
            $mhs->foto = $image_name;
        }

        $mhs->save();

        return redirect('/mahasiswa')
            ->with('success', 'Mahasiswa Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        MahasiswaModel::where('id', '=', $id)->delete();
        return redirect('/mahasiswa')->with('success', 'Mahasiswa Berhasil Dihapus');
    }
    public function cetak_pdf($id)
    {
        $mhs = MahasiswaModel::find($id);
        $mahasiswamatakuliah = Mahasiswa_MataKuliah::with('mahasiswa', 'matakuliah')->where('mahasiswa_id',  $id)->get();

        $pdf = PDF::loadview('mahasiswa.nilai_pdf', ['mhs' => $mhs, 'mm' => $mahasiswamatakuliah]);
        return $pdf->stream();
    }
}
