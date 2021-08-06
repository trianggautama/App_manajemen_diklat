<?php

namespace App\Http\Controllers;

use App\Models\LaporanAktualisasi;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanAktualisasiPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $data = LaporanAktualisasi::whereUserId($id)->first();
        return view('peserta.laporan_aktualisasi.index', compact('data'));
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
        $user = Auth::user();
        $input = $request->all();
        $input['user_id'] = $user->id;
        $input['pelatihan_id'] = $user->pelatihan_id;
        if (isset($request->laporan)) {
            $file = $request->file('laporan');

            $file_name = time() . "_" . $file->getClientOriginalName();

            $file->move('laporan', $file_name);
            $input['laporan'] = $file_name;
        }

        LaporanAktualisasi::create($input);

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
        $data = LaporanAktualisasi::findOrFail($id);

        return view('peserta.laporan_aktualisasi.edit', compact('data'));
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
        $data = LaporanAktualisasi::findOrFail($id);

        return redirect()->route('userPeserta.laporan_aktualisasi.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = LaporanAktualisasi::findOrFail($id);

        try {
            $data->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
