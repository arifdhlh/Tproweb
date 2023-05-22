<?php

namespace App\Http\Controllers;

use App\Models\urus;
use Illuminate\Http\Request;

class dashurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.urus.index', [
            'urusan' => urus::first()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.urus.create');
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
            'nama' => 'required',
            'kelas' => 'required',
            'linkig' => 'required',
            'image' => 'image|file|max:10000'
        ]);
        
        if($request->file('image')){
            $validateData['image']=$request->file('image')->store('post-images');
        }
            
        urus::create($validateData);

        return redirect('/dashboard/urus')->with('success','Pengurus berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\urus  $urus
     * @return \Illuminate\Http\Response
     */
    public function show(urus $urus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\urus  $urus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.urus.edit')->with(['urus' => urus::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\urus  $urus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'linkig' => 'required',
            'image' => 'image|file|max:10000'
        ]);

        if($request->file('image')){
            $validateData['image']=$request->file('image')->store('post-images');
        }
        
        urus::where('id', $id)
            ->update($validateData);

        return redirect('/dashboard/urus')->with('success','Data pengurus berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\urus  $urus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        urus::destroy($id);

        return redirect('/dashboard/urus')->with('success','Data pengurus berhasil dihapus');
    }
}
