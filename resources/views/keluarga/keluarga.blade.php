@extends('layouts.template')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Courses</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Courses</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            @if (session('success'))
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <a href="{{ url('keluarga/create') }}" class="btn btn-sm btn-success my-2">
                <i class="fas fa-plus"></i> Add Data
            </a>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Agama</th>
                        <th scope="col">Pendidikan</th>
                        <th scope="col">Pekerjaan</th>
                        <th scope="col">Hubungan</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $id = 1;
                    @endphp
                    @if ($keluarga->count() > 0)
                        @foreach ($keluarga as $item)
                            <tr>
                                <th scope="row">{{ $id++ }}</th>
                                <td>{{ $item->nama_wali }}</td>
                                <td>{{ $item->alamat_wali }}</td>
                                <td>{{ $item->nik_wali }}</td>
                                <td>{{ $item->agama }}</td>
                                <td>{{ $item->pendidikan_wali }}</td>
                                <td>{{ $item->pekerjaan_wali }}</td>
                                <td>{{ $item->hubungan }}</td>
                                <td>
                                    <!-- Bikin tombol edit dan delete -->
                                    <a href="{{ url('/keluarga/' . $item->id_keluarga . '/edit') }}"
                                        class="btn btn-sm btn-warning"> <i class="fas fa-edit"></i> Edit </a>

                                    <form method="POST" action="{{ url('/keluarga/' . $item->id_keluarga) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6" class="text-center">No Data Available</td>
                        </tr>
                    @endif
                </tbody>
            </table>

        </section>
        <!-- /.content -->
    </div>
@endsection
