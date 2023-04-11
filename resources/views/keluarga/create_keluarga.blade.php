@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Course Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Course Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row justify-content-center">
                <div class="card" style="width: 80%">
                    <div class="card-body ">
                        <form method="POST" action="{{ $urlform }}">
                            @csrf
                            {!! isset($keluarga) ? method_field('PUT') : '' !!}
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control @error('nama_wali') is-invalid @enderror"
                                    value="{{ isset($keluarga) ? $keluarga->nama_wali : old('nama_wali') }} "
                                    name="nama_wali"
                                    type="text">
                                @error('nama_wali')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control @error('alamat_wali') is-invalid @enderror"
                                    value="{{ isset($keluarga) ? $keluarga->alamat_wali : old('alamat_wali') }} "
                                    name="alamat_wali"
                                    type="text">
                                @error('alamat_wali')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>NIK</label>
                                <input class="form-control @error('nik_wali') is-invalid @enderror"
                                    value="{{ isset($keluarga) ? $keluarga->nik_wali : old('nik_wali') }} "
                                    name="nik_wali"
                                    type="text">
                                @error('nik_wali')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control @error('agama') is-invalid @enderror" name="agama">
                                    <option value="">-- Pilih Agama --</option>
                                    <option value="islam"
                                        {{ isset($keluarga) && $keluarga->agama == 'islam' ? 'selected' : '' }}>
                                        islam</option>
                                    <option value="kristen"
                                        {{ isset($keluarga) && $keluarga->agama == 'kristen' ? 'selected' : '' }}>
                                        kristen</option>
                                    <option value="katolik"
                                        {{ isset($keluarga) && $keluarga->agama == 'katolik' ? 'selected' : '' }}>
                                        katolik</option>
                                    <option value="hindu"
                                        {{ isset($keluarga) && $keluarga->agama == 'hindu' ? 'selected' : '' }}>
                                        hindu</option>
                                    <option value="buddha"
                                        {{ isset($keluarga) && $keluarga->agama == 'buddha' ? 'selected' : '' }}>
                                        buddha</option>
                                    <option value="konghucu"
                                        {{ isset($keluarga) && $keluarga->agama == 'konghucu' ? 'selected' : '' }}>
                                        konghucu</option>
                                </select>
                                @error('agama')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pendidikan</label>
                                <input class="form-control @error('pendidikan_wali') is-invalid @enderror"
                                    value="{{ isset($keluarga) ? $keluarga->pendidikan_wali : old('pendidikan_wali') }} "
                                    name="pendidikan_wali"
                                    type="text">
                                @error('pendidikan_wali')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input class="form-control @error('pekerjaan_wali') is-invalid @enderror"
                                    value="{{ isset($keluarga) ? $keluarga->pekerjaan_wali : old('pekerjaan_wali') }} "
                                    name="pekerjaan_wali"
                                    type="text">
                                @error('pekerjaan_wali')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Hubungan</label>
                                <input class="form-control @error('hubungan') is-invalid @enderror"
                                    value="{{ isset($keluarga) ? $keluarga->hubungan : old('hubungan') }} "
                                    name="hubungan"
                                    type="text">
                                @error('hubungan')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-md btn-primary my-2 float-right" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
