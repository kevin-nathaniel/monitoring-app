<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class GrafikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('grafik.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function showPieChart()
    {
        // Mendapatkan semua tabel dalam database
        $tables = Schema::getConnection()->getDoctrineSchemaManager()->listTableNames();

        $data = [];
        foreach ($tables as $table) {
            // Menghitung jumlah data dalam setiap tabel
            $count = DB::table($table)->count();
            $data[] = ['table' => $table, 'count' => $count];
        }

        return view('mypie-chart', compact('data'));
    }
}
