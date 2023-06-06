<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Mahasiswa_MataKuliah;
use App\Models\MataKuliah;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.mahasiswa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all(); // mendapatkan data dari tabel kelas
        return view('mahasiswa.create_mahasiswa', ['url_form' => url('/mahasiswa'), 'kelas' => $kelas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswas,nim',
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal ditambahkan. ' .$validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::create($request->all());
        return response()->json([
            'status' => ($mhs),
            'modal_close' => false,
            'message' => ($mhs)? 'Data berhasil ditambahkan' : 'Data gagal ditambahkan',
            'data' => null
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show($Nim)
    {
        //menampilkan detail data berdasarkan Nim Mahasiswa
        //code sebelum dibuat relasi --> $mahasiswa = MahasiswaModel::find($Nim);
        $mahasiswa = MahasiswaModel::with('kelas')->where('nim', $Nim)->first();

        return view('mahasiswa.detail_mahasiswa', ['mhs' => $mahasiswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($nim)
    {
        // menampilkan detail data dengan menemukan berdasarkan nim mahasiswa untuk diedit
        $mahasiswa = MahasiswaModel::with('kelas')->where('nim', $nim)->first();
        $kelas = Kelas::all(); // Mendapatkan data dari tabel kelas
        return view('mahasiswa.create_mahasiswa')
            ->with('mhs', $mahasiswa)
            ->with('kelas', $kelas)
            ->with('url_form', url('/mahasiswa/' . $nim));
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
        $rule = [
            'nim' => 'required|string|max:10|unique:mahasiswas,nim,'.$id,
            'nama' => 'required|string|max:50',
            'hp' => 'required|digits_between:6,15',
        ];

        $validator = Validator::make($request->all(), $rule);
        if($validator->fails()){
            return response()->json([
                'status' => false,
                'modal_close' => false,
                'message' => 'Data gagal diedit. ' .$validator->errors()->first(),
                'data' => $validator->errors()
            ]);
        }

        $mhs = MahasiswaModel::where('id', $id)->update($request->except('_token', '_method'));

        return response()->json([
            'status' => ($mhs),
            'modal_close' => $mhs,
            'message' => ($mhs)? 'Data berhasil diedit' : 'Data gagal diedit',
            'data' => null
        ]);
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
        return redirect('mahasiswa')
        ->with('success', 'Mahasiswa Berhasil Dihapus');
    }

    public function detail_nilai($nim){
        $mahasiswa = MahasiswaModel::where('nim', $nim)->first();
        return view('mahasiswa.khs_mahasiswa', ['mhs' => $mahasiswa]);
    }

    public function cetak_nilai($nim){
        $mahasiswa = MahasiswaModel::where('nim', $nim)->first();
        $pdf = Pdf::loadview('mahasiswa.nilai_pdf', ['mhs'=>$mahasiswa]);
        return $pdf->stream();
    }

    public function data(){
        $data = MahasiswaModel::selectRaw('id, nim, nama, foto, hp');

        return DataTables::of($data)
                    ->addIndexColumn()
                    ->make(true);
    }
}