<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terminal extends Model
{
    use HasFactory;

    protected $fillable = ['hari', 'tgl', 'nama_aset', 'waktu', 'running_condition','comb','emergency_key_and_key_switch','handrailguard_switch','steppallet','demercation','driveroller','pressureroller','drivewheel' ,'guideroller' ,'chain_drive','chain_sprocket','handrail_driving_equipment','skritguard_switch','plate_chain','roller_axle','sprocket_gear_dan_balokbantalan','machineroom_condition' ,'kondisi_traksi_mesin' ,'oil_seal','operational','magnetic_brake','driving_chain_follower','control_panel','automatic_start_stop','handrail_lighting','monitoring_system', 'foto'];
}
