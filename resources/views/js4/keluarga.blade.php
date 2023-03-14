@extends('layouts.template')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Keluarga</h1>
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
          <h3 class="card-title">Keluarga</h3>

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
                  <th>ID Keluarga</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>NIK</th>
                  <th>Agama</th>
                  <th>Pendidikan</th>
                  <th>Pekerjaan</th>
                  <th>Hubungan</th>
                </tr>
                </thead>
                <tbody>
                @foreach($keluarga as $a)
                <tr>
                  <td>{{$a->id_keluarga}}</td>
                  <td>{{$a->nama_wali}}</td>
                  <td>{{$a->alamat_wali}}</td>
                  <td>{{$a->nik_wali}}</td>
                  <td>{{$a->agama}}</td>
                  <td>{{$a->pendidikan_wali}}</td>
                  <td>{{$a->pekerjaan_wali}}</td>
                  <td>{{$a->hubungan}}</td>
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


