<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fam = Family::all();
        return view('keluarga.keluarga')->with('fam', $fam);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keluarga.create_keluarga')->with('url_form', url('/keluarga'));
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
            'nama' => 'required|string',
            'relasi' => 'required|string|max:50',
            'umur' => 'required|digits_between:1,150',
        ]);

        $data = Family::create($request->except(['_token']));
        // Jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('keluarga')
            ->with('success', 'Data Keluarga Berhasil Ditambahkan');
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
        $fam = Family::find($id);
        return view('keluarga.create_keluarga')
            ->with('fam', $fam)
            ->with('url_form', url('/keluarga/' . $id));
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
            'nama' => 'required|string',
            'relasi' => 'required|string|max:50',
            'umur' => 'required|digits_between:1,150',
        ]);

        $data = Family::where('id', '=', $id)
                ->update($request->except(['_token', '_method']));
        return redirect('keluarga')
            ->with('success', 'Data Keluarga Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Family::where('id', '=', $id)->delete();
        return redirect('keluarga')
        ->with('success', 'Data Kaeluarga Berhasil Dihapus');
    }
}