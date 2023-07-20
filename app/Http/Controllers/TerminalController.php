<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Terminal;

class TerminalController extends Controller
{
    public function index()
    {
        return view('log-activity.terminal.index');
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('entry.terminal.create');
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'hari' => 'required',
            'tgl' => 'required',
            'nama_aset' => 'required',
            'waktu' => 'required',
            'running_condition' => 'required',
            'comb' => 'required',
            'emergency_key_and_key_switch' => 'required',
            'handrailguard_switch' => 'required',
            'steppallet' => 'required',
            'demercation' => 'required',
            'driveroller' => 'required',
            'pressureroller' => 'required',
            'drivewheel' => 'required',
            'guideroller' => 'required',
            'chain_drive' => 'required',
            'chain_sprocket' => 'required',
            'handrail_driving_equipment' => 'required',
            'skritguard_switch' => 'required',
            'plate_chain' => 'required',
            'roller_axle' => 'required',
            'sprocket_gear_dan_balokbantalan' => 'required',
            'machineroom_condition' => 'required',
            'kondisi_traksi_mesin' => 'required',
            'oil_seal' => 'required',
            'operational' => 'required',
            'magnetic_brake' => 'required',
            'driving_chain_follower' => 'required',
            'control_panel' => 'required',
            'automatic_start_stop' => 'required',
            'handrail_lighting' => 'required',
            'monitoring_system' => 'required',
            'foto' => 'image|file|max:10000',
        ]);

        if($request->file('foto')){
            $validateData['foto']=$request->file('foto')->store('post-images');
        }

        Terminal::create($validateData);

        return redirect('/dashboard/inspeksi')->with('success','Data rekam berhasil ditambahkan');
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Models\Terminal  $rekam
     * @return \Illuminate\Http\Response
     */
    public function show(Terminal $damkar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Terminal  $Damkar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('log-activity.terminal.edit',[
            'inspeksi' => Terminal::orderBy('id', 'asc')->first()->get()
        ])->with(['terminal' => Terminal::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Terminal  $Damkar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validateData = $request->validate([
            'hari' => 'required',
            'tgl' => 'required',
            'nama_aset' => 'required',
            'waktu' => 'required',
            'running_condition' => 'required',
            'comb' => 'required',
            'emergency_key_and_key_switch' => 'required',
            'handrailguard_switch' => 'required',
            'steppallet' => 'required',
            'demercation' => 'required',
            'driveroller' => 'required',
            'pressureroller' => 'required',
            'drivewheel' => 'required',
            'guideroller' => 'required',
            'chain_drive' => 'required',
            'chain_sprocket' => 'required',
            'handrail_driving_equipment' => 'required',
            'skritguard_switch' => 'required',
            'plate_chain' => 'required',
            'roller_axle' => 'required',
            'sprocket_gear_dan_balokbantalan' => 'required',
            'machineroom_condition' => 'required',
            'kondisi_traksi_mesin' => 'required',
            'oil_seal' => 'required',
            'operational' => 'required',
            'magnetic_brake' => 'required',
            'driving_chain_follower' => 'required',
            'control_panel' => 'required',
            'automatic_start_stop' => 'required',
            'handrail_lighting' => 'required',
            'monitoring_system' => 'required',
            'foto' => 'image|file|max:10000',
        ]);


        if($request->file('foto')){
            if($request->oldimage) {
                Storage::delete($request->oldimage);
            }
            $validateData['foto']=$request->file('foto')->store('post-images');
        }

        Terminal::where('id', $id)->update($validateData);

        return redirect('/dashboard/terminal')->with('success','Data rekam berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Terminal  $rekam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Terminal $terminal)
    {
        if($terminal->foto) {
            Storage::delete($terminal->foto);
        }

        Terminal::destroy($terminal->id);

        return redirect('/dashboard/terminal')->with('success','Data rekam berhasil dihapus');
    }
}
