<?php

namespace App\Http\Controllers;

use App\Models\ObjekPenilaian;
use App\Models\Pelatihan;
use App\Models\PenilaianPeserta;
use App\Models\User;
use Illuminate\Http\Request;

class PenilaianPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id, $pelatihan_id)
    {
        $peserta = User::findOrfail($user_id);
        $pelatihan = Pelatihan::findOrFail($pelatihan_id);
        $objekPenilaian = ObjekPenilaian::all();

        $data = PenilaianPeserta::whereUserId($user_id)->wherePelatihanId($pelatihan_id)->get();
        $rata = number_format((float) $data->avg('nilai'), 2, '.', '');
        return view('widyaiswara.penilaian_peserta.index', compact('data', 'pelatihan', 'peserta', 'objekPenilaian', 'rata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PenilaianPeserta::create($request->all());

        return back()->withSuccess('Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PenilaianPeserta::findOrFail($id)->delete();
        return back()->withSuccess('Data berhasil dihapus');
    }
}
