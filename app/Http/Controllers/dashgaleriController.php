<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use Illuminate\Http\Request;

class dashgaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.galeri.index', [
            'pajangan' => galeri::first()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.galeri.create');
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
            'title' => 'required',
            'image' => 'image|file|max:10000'
        ]);
        
        if($request->file('image')){
            $validateData['image']=$request->file('image')->store('post-images');
        }
            
        galeri::create($validateData);

        return redirect('/dashboard/galeri')->with('success','Galeri berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.galeri.edit')->with(['galeri' => galeri::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'image|file|max:10000'
        ]);

        if($request->file('image')){
            $validateData['image']=$request->file('image')->store('post-images');
        }
        
        galeri::where('id', $id)
            ->update($validateData);

        return redirect('/dashboard/galeri')->with('success','Galeri berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        galeri::destroy($id);

        return redirect('/dashboard/galeri')->with('success','Galeri berhasil dihapus');
    }
}
