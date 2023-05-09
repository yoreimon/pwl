@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
                <h3 class="card-title">Kartu Hasil Studi</h3>

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
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nama: </b>{{$mhs->nama}}</li>
                    <li class="list-group-item"><b>NIM: </b>{{$mhs->nim}}</li>
                    <li class="list-group-item"><b>Kelas: </b>{{$mhs->kelas->nama_kelas}}</li>
                </ul>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Semester</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mhs->matakuliah as $n)
                        <tr>
                            <td>{{$n->nama_matkul}}</td>
                            <td>{{$n->sks}}</td>
                            <td>{{$n->semester}}</td>
                            <td>{{$n->pivot->nilai}}</td>
                        </tr>
                        @endforeach
                        @if($mhs->matakuliah->count() <= 0) <tr>
                            <td colspan="6" class="text-center">Data Nilai belum ada</td>
                            </tr>
                            @endif
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection