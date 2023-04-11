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
                            {!! isset($matkul) ? method_field('PUT') : '' !!}
                            <div class="form-group">
                                <label>Kode</label>
                                <input class="form-control @error('kode_matkul') is-invalid @enderror"
                                    value="{{ isset($matkul) ? $matkul->kode_matkul : old('kode_matkul') }} " name="kode_matkul"
                                    type="text">
                                @error('kode_matkul')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control @error('nama_matkul') is-invalid @enderror"
                                    value="{{ isset($matkul) ? $matkul->nama_matkul : old('nama_matkul') }} " name="nama_matkul"
                                    type="text">
                                @error('nama_matkul')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Dosen</label>
                                <input class="form-control @error('dosen_matkul') is-invalid @enderror"
                                    value="{{ isset($matkul) ? $matkul->dosen_matkul : old('dosen_matkul') }} " name="dosen_matkul"
                                    type="text">
                                @error('dosen_matkul')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>SKS</label>
                                <input class="form-control @error('sks') is-invalid @enderror"
                                    value="{{ isset($matkul) ? intval($matkul->sks) : old('sks') }}" name="sks"
                                    type="number">
                                @error('sks')
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
