<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Damkar extends Model
{
    use HasFactory;

    protected $fillable = ['hari','tgl','waktu','kendaraan','body','voltase','accu','oli','gardan','filter_oli','filter_bahan_bakar','exhaust' ,'minyak' ,'foto'];
}
