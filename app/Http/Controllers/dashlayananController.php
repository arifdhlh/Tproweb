<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use Illuminate\Http\Request;

class dashlayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.layanan.index', [
            'layanan_layanan' => layanan::orderBy('id', 'desc')->first()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'jenis' => 'required',
            'deskripsi' => 'required'
        ]);

        layanan::create($validateData);

        return redirect('/dashboard/layanan')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(layanan $layanan)
    {
        return view('dashboard.layanan.edit', [
            'layanan' => $layanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, layanan $layanan)
    {
        $validateData = $request->validate([
            'jenis' => 'required',
            'deskripsi' => 'required',
        ]);

        layanan::where('id', $layanan->id)
            ->update($validateData);

        return redirect('/dashboard/layanan')->with('success','Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(layanan $layanan)
    {
        layanan::destroy($layanan->id);

        return redirect('/dashboard/layanan')->with('success','Data berhasil dihapus');
    }
}
