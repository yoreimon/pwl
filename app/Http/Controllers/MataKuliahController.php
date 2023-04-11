<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mk = MataKuliah::all();
        return view('matakuliah.matakuliah')->with('mk', $mk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matakuliah.create_matakuliah')->with('url_form', url('/mata-kuliah'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $request->validate([
            'nama_matkul' => 'required|string',
            'sks' => 'required|digits_between:1,12',
        ]);

        $data = MataKuliah::create($request->except(['_token']));
        // Jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('mata-kuliah')
            ->with('success', 'Data Matkul Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mk = MataKuliah::find($id);
        return view('matakuliah.create_matakuliah')
            ->with('mk', $mk)
            ->with('url_form', url('/mata-kuliah/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validasi
        $request->validate([
            'nama_matkul' => 'required|string',
            'sks' => 'required|digits_between:1,12',
        ]);

        $data = MataKuliah::where('id', '=', $id)
                ->update($request->except(['_token', '_method']));
        return redirect('mata-kuliah')
            ->with('success', 'Data Matakuliah Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MataKuliah::where('id', '=', $id)->delete();
        return redirect('mata-kuliah')
        ->with('success', 'Data Matkul Berhasil Dihapus');
    }
}