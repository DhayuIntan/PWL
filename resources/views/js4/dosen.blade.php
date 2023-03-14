@extends('layouts.template')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dosen Politeknik Negeri Malang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Dosen</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <table id="tabelartikel" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID Dosen</th>
                  <th>NIDN</th>
                  <th>Nama Dosen</th>
                  <th>Jenis Kelamin</th>
                  <th>Kota Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Prodi Dosen/th>
                  <th>Pendidikan Dosen</th>
                  <th>Status Dosen</th>
                  <th>Alamat</th>
                  <th>No.Telp</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dosen as $a)
                <tr>
                  <td>{{$a->id_dosen}}</td>
                  <td>{{$a->nidn}}</td>
                  <td>{{$a->nama_dosen}}</td>
                  <td>{{$a->jenis_kelamin}}</td>
                  <td>{{$a->kota_lahir}}</td>
                  <td>{{$a->tanggal_lahir}}</td>
                  <td>{{$a->prodi_dosen}}</td>
                  <td>{{$a->pendidikan_dosen}}</td>
                  <td>{{$a->status_dosen}}</td>
                  <td>{{$a->alamat}}</td>
                  <td>{{$a->no_telp}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          2023
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection


