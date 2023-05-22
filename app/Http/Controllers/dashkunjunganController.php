<?php

namespace App\Http\Controllers;

use App\Models\kunjungan;
use Illuminate\Http\Request;

class dashkunjunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.kunjungan.index', [
            'tamu' => kunjungan::orderBy('id', 'desc')->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.kunjungan.create');
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
            'nama' => 'required|max:255',
            'kelas' => 'required|max:255',
            'keperluan' => 'required',
            'masuk' => 'required|date',
            'keluar' => 'date|nullable'
        ]);

        kunjungan::create($validateData);

        return redirect('/dashboard/kunjungan')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kunjungan  $kunjungan
     * @return \Illuminate\Http\Response
     */
    public function show(kunjungan $kunjungan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kunjungan  $kunjungan
     * @return \Illuminate\Http\Response
     */
    public function edit(kunjungan $kunjungan)
    {
        return view('dashboard.kunjungan.edit', [
            'tamu' => $kunjungan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kunjungan  $kunjungan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kunjungan $kunjungan)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'kelas' => 'required|max:255',
            'keperluan' => 'required',
            'masuk' => 'required|date',
            'keluar' => 'date|nullable'
        ]);

        kunjungan::where('id', $kunjungan->id)
            ->update($validateData);

        return redirect('/dashboard/kunjungan')->with('success','Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kunjungan  $kunjungan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kunjungan $kunjungan)
    {
        kunjungan::destroy($kunjungan->id);

        return redirect('/dashboard/kunjungan')->with('success','Data berhasil dihapus');
    }
}
