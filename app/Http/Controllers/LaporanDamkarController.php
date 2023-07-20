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
        return view('laporan.damkar.print', compact('damkar'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return App\Models\Damkar;
     */
    public function generatePDF($id)
    {
        $damkar = Damkar::findOrFail($id);
        $data = ['damkar' => $damkar];

        try {
            $pdf = PDF::loadView('laporan.damkar.print', $data);
            return $pdf->download('laporan_inspeksi.pdf');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to generate PDF: ' . $e->getMessage());
        }
    }
}
