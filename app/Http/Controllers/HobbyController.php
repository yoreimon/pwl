<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hobby;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobi = Hobby::all();
        return view('hobi.hobi')->with('hobi', $hobi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hobi.create_hobi')->with('url_form', url('/hobi'));
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
            'jenis' => 'required|string',
            'hobi' => 'required|string',
        ]);

        $data = Hobby::create($request->except(['_token']));
        // Jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('hobi')
            ->with('success', 'Hobi Berhasil Ditambahkan');
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
        $hobi = Hobby::find($id);
        return view('hobi.create_hobi')
            ->with('hobi', $hobi)
            ->with('url_form', url('/hobi/' . $id));
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
            'jenis' => 'required|string',
            'hobi' => 'required|string',
        ]);

        $data = Hobby::where('id', '=', $id)
                ->update($request->except(['_token', '_method']));
        return redirect('hobi')
            ->with('success', 'Hobi Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hobby::where('id', '=', $id)->delete();
        return redirect('hobi')
        ->with('success', 'Hobi Berhasil Dihapus');
    }
}