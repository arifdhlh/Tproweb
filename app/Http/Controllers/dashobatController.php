<?php

namespace App\Http\Controllers;

use App\Models\obat;
use Illuminate\Http\Request;

class dashobatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.obat.index', [
            'obat_obat' => obat::orderBy('id', 'desc')->first()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.obat.create');
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
            'namaobat' => 'required|max:255',
            'stok' => 'required',
            'satuan' => 'required',
        ]);

        obat::create($validateData);

        return redirect('/dashboard/obat')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show(obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit(obat $obat)
    {
        return view('dashboard.obat.edit', [
            'obat' => $obat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, obat $obat)
    {
        $validateData = $request->validate([
            'namaobat' => 'required|max:255',
            'stok' => 'required',
            'satuan' => 'required',
        ]);

        obat::where('id', $obat->id)
            ->update($validateData);

        return redirect('/dashboard/obat')->with('success','Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy(obat $obat)
    {
        obat::destroy($obat->id);

        return redirect('/dashboard/obat')->with('success','Data berhasil dihapus');
    }
}
