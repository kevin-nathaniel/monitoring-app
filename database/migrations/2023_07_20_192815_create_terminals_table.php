<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('terminals', function (Blueprint $table) {
            $table->id();
            $table->string('hari')->require;
            $table->date('tgl')->require;
            $table->string('nama_aset')->require;
            $table->string('waktu')->require;
            $table->string('running_condition')->require;
            $table->string('comb')->require;
            $table->string('emergency_key_and_key_switch')->require;
            $table->string('handrailguard_switch')->require;
            $table->string('steppallet')->require;
            $table->string('demercation')->require;
            $table->string('driveroller')->require;
            $table->string('pressureroller')->require;
            $table->string('drivewheel')->require;
            $table->string('guideroller')->require;
            $table->string('chain_drive')->require;
            $table->string('chain_sprocket')->require;
            $table->string('handrail_driving_equipment')->require;
            $table->string('skritguard_switch')->require;
            $table->string('plate_chain')->require;
            $table->string('roller_axle')->require;
            $table->string('sprocket_gear_dan_balokbantalan')->require;
            $table->string('machineroom_condition')->require;
            $table->string('kondisi_traksi_mesin')->require;
            $table->string('oil_seal')->require;
            $table->string('operational')->require;
            $table->string('magnetic_brake')->require;
            $table->string('driving_chain_follower')->require;
            $table->string('control_panel')->require;
            $table->string('automatic_start_stop')->require;
            $table->string('handrail_lighting')->require;
            $table->string('monitoring_system')->require;
            $table->string('foto')->require;
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terminals');
    }
};
