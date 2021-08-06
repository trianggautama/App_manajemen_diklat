<?php

namespace App\Http\Controllers;

use App\Models\LaporanAktualisasi;
use App\Models\Pelatihan;
use App\Models\User;
use Illuminate\Http\Request;

class pelatihanWidyaiswaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pelatihan::all();
        return view('widyaiswara.pelatihan.index', compact('data'));
    }

    public function riwayat()
    {
        return view('widyaiswara.pelatihan.riwayat');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pelatihan::findOrFail($id);
        $laporan = LaporanAktualisasi::wherePelatihanId($id)->get();
        $user = User::wherePelatihanId($id)->get();
        return view('widyaiswara.pelatihan.show', compact('data', 'laporan', 'user'));
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
        $data = LaporanAktualisasi::findOrFail($id)->first();

        $data->status = 1;
        $data->update();

        return back()->withSuccess('Data berhasil diverifikasi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
