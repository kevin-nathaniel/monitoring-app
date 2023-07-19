<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Damkar;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanDamkarController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('laporan.damkar.index', [
            'damkar' => Damkar::orderBy('id', 'asc')->latest()->get(),
        ]);
    }

            /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

            /**
     * Display a listing of the resource.
     *
     * @return App\Models\Damkar;
     */

    public function viewPDF($id)
    {
        $damkar = Damkar::findOrFail($id);
        return view('laporan.damkar.print');
    }

    public function generatePDF()
    {
        $pdf = Pdf::loadview('laporan.damkar.print');
        return $pdf->download('laporan_inspeksi.pdf');
    }
}
