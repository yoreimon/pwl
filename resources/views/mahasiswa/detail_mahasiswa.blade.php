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
                <h3 class="card-title">Hallo</h3>

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
                    <li class="list-group-item"><b>NIM: </b>{{$mhs->nim}}</li>
                    <li class="list-group-item"><b>Nama: </b>{{$mhs->nama}}</li>
                    <li class="list-group-item"><b>Kelas: </b>{{$mhs->kelas->nama_kelas}}</li>
                    <li class="list-group-item"><b>JK: </b>{{$mhs->jk}}</li>
                    <li class="list-group-item"><b>Tempat Lahir: </b>{{$mhs->tempat_lahir}}</li>
                    <li class="list-group-item"><b>Tanggal Lahir: </b>{{$mhs->tanggal_lahir}}</li>
                    <li class="list-group-item"><b>Alamat: </b>{{$mhs->alamat}}</li>
                    <li class="list-group-item"><b>No. HP: </b>{{$mhs->hp}}</li>
                    <li class="list-group-item"><b>Foto: </b><img width="150px"
                            src="{{ isset($mhs)? asset('storage/'.$mhs->foto) : ''}}"></li>
                </ul>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection