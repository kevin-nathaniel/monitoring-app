<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hanggar extends Model
{
    use HasFactory;

    protected $fillable = ['hari','tgl','nama','oli_kompresor','vanbelt','tabung_kompresor','safety_valve','kontaktor','push_button','line','chain','grease' ,'kabel' ,'foto'];
}
