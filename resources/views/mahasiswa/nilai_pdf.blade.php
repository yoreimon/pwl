<!DOCTYPE html>
<html>

<head>
    <title>CETAK KHS</title>
</head>

<body>
    <div>
        <h6 class="text-center">JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h6>
        <h1 class="text-center">KARTU HASIL STUDI (KHS)</h1>
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
</body>

</html>