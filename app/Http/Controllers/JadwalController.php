<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('jadwal.index');
    }
}
