<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hanggar;

class HanggarController extends Controller
{
    public function index()
    {
        return view('log-activity.hanggar.index');
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('entry.hanggar.create');
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
            'nama' => 'required',
            'oli_kompresor' => 'required',
            'vanbelt' => 'required',
            'tabung_kompresor' => 'required',
            'safety_valve' => 'required',
            'kontaktor' => 'required',
            'push_button' => 'required',
            'line' => 'required',
            'chain' => 'required',
            'grease' => 'required',
            'kabel' => 'required',
            'foto' => 'image|file|max:10000',
        ]);

        if($request->file('foto')){
            $validateData['foto']=$request->file('foto')->store('post-images');
        }

        Hanggar::create($validateData);

        return redirect('/dashboard/inspeksi')->with('success','Data rekam berhasil ditambahkan');
    }
}
