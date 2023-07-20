<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hanggar extends Model
{
    use HasFactory;

    protected $fillable = ['hari','tgl','nama', 'waktu', 'oli_kompresor','vanbelt','tabung_kompresor','safety_value','kontaktor','push_button','line','chain','grease' ,'kabel' ,'foto'];
}
