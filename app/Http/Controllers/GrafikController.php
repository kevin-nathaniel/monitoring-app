<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Models\Odometer;

class GrafikController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countjumlah = Odometer::count();
        $countket = Odometer::distinct('keterangan')->count('keterangan');

        $countketrusak= Odometer::where('keterangan', 'Belum Siap Digunakan Atau Rusak')->count();
        $countketrawan = Odometer::where('keterangan', 'Siap Digunakan Tapi Rawan')->count();
        $countketsiap = Odometer::where('keterangan', 'Siap Digunakan Dan Tidak Rusak')->count();

        return view('grafik.index', compact('countjumlah', 'countket', 'countketrusak', 'countketrawan', 'countketsiap'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {

    //     return view ('grafik.create');
    // }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nilai' => 'required',
        ]);

        // Logika untuk mengisi kolom 'keterangan' berdasarkan 'nilai'
        $nilai = $validateData['nilai'];
        $keterangan = '';

        if ($nilai >= 0 && $nilai <= 50) {
            $keterangan = 'Belum Siap Digunakan Atau Rusak';
        } elseif ($nilai > 50 && $nilai <= 100) {
            $keterangan = 'Siap Digunakan Tapi Rawan';
        } else {
            $keterangan = 'Siap Digunakan Dan Tidak Rusak';
        }

        // Menambahkan nilai 'keterangan' ke dalam $validateData
        $validateData['keterangan'] = $keterangan;

        Odometer::create($validateData);

        return redirect('/dashboard/grafik')->with('success','Data rekam berhasil ditambahkan');
    }
}
