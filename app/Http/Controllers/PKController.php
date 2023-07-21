<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Damkar;
use Illuminate\Support\Facades\Storage;

class DamkarController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('log.damkar.index', [
            'damkar' => Damkar::orderBy('id', 'asc')->latest()->get(),
        ]);
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('entry.damkar.create');
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
            'hari' => 'required',
            'tgl' => 'required',
            'waktu' => 'required',
            'kendaraan' => 'required',
            'body' => 'required',
            'voltase' => 'required',
            'accu' => 'required',
            'oli' => 'required',
            'gardan' => 'required',
            'filter_oli' => 'required',
            'filter_bahan_bakar' => 'required',
            'exhaust' => 'required',
            'minyak' => 'required',
            'foto' => 'image|file|max:10000',
        ]);

        if($request->file('foto')){
            $validateData['foto']=$request->file('foto')->store('post-images');
        }

        Damkar::create($validateData);

        return redirect('/dashboard/inspeksi')->with('success','Data rekam berhasil ditambahkan');
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Damkar  $rekam
     * @return \Illuminate\Http\Response
     */
    public function show(Damkar $damkar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Damkar  $Damkar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('log.damkar.edit',[
            'inspeksi' => Damkar::orderBy('id', 'asc')->first()->get()
        ])->with(['damkar' => Damkar::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Damkar  $Damkar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validateData = $request->validate([
            'hari' => 'required',
            'tgl' => 'required',
            'waktu' => 'required',
            'kendaraan' => 'required',
            'body' => 'required',
            'voltase' => 'required',
            'accu' => 'required',
            'oli' => 'required',
            'gardan' => 'required',
            'filter_oli' => 'required',
            'filter_bahan_bakar' => 'required',
            'exhaust' => 'required',
            'minyak' => 'required',
            'foto' => 'image|file|max:10000',
        ]);


        if($request->file('foto')){
            if($request->oldimage) {
                Storage::delete($request->oldimage);
            }
            $validateData['foto']=$request->file('foto')->store('post-images');
        }

        Damkar::where('id', $id)->update($validateData);

        return redirect('/dashboard/damkar')->with('success','Data rekam berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Damkar  $rekam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Damkar $damkar)
    {
        if($damkar->foto) {
            Storage::delete($damkar->foto);
        }

        Damkar::destroy($damkar->id);

        return redirect('/dashboard/damkar')->with('success','Data rekam berhasil dihapus');
    }
}
