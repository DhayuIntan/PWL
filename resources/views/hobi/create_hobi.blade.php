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
                            {!! isset($hobi) ? method_field('PUT') : '' !!}
                            <div class="form-group">
                                <label>Nama Siswa</label>
                                <input class="form-control @error('nama_siswa') is-invalid @enderror"
                                    value="{{ isset($hobi) ? $hobi->nama_siswa : old('nama_siswa') }} " name="nama_siswa"
                                    type="text">
                                @error('nama_siswa')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input class="form-control @error('alamat') is-invalid @enderror"
                                    value="{{ isset($hobi) ? $hobi->alamat : old('alamat') }} " name="alamat"
                                    type="text">
                                @error('alamat')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Hobi</label>
                                <input class="form-control @error('hobi') is-invalid @enderror"
                                    value="{{ isset($hobi) ? $hobi->hobi : old('hobi') }} " name="hobi"
                                    type="text">
                                @error('hobi')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Prestasi</label>
                                <input class="form-control @error('prestasi') is-invalid @enderror"
                                    value="{{ isset($hobi) ? intval($hobi->prestasi) : old('prestasi') }}" name="prestasi"
                                    type="text">
                                @error('prestasi')
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
