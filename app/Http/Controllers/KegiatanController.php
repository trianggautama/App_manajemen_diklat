<?php

namespace App\Http\Controllers;

use App\Models\KegiatanPeserta;
use App\Models\ModulPembelajaran;
use App\Models\Pelatihan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $pelatihan = Pelatihan::findOrFail($id);
        $data = KegiatanPeserta::where('pelatihan_id', $pelatihan->id)->get();

        return view('widyaiswara.kegiatan_harian.index', compact('data', 'pelatihan'));
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
        $data = $request->all();
        $waktu_mulai = Carbon::parse($request->waktu_mulai);
        $waktu_selesai = Carbon::parse($request->waktu_selesai);
        $menit = $waktu_mulai->diffInMinutes($waktu_selesai);

        $data['waktu_kegiatan'] = $menit;
        KegiatanPeserta::create($data);

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
        $data = KegiatanPeserta::findOrFail($id);
        $modul = ModulPembelajaran::whereKegiatanPesertaId($id)->get();
        return view('widyaiswara.kegiatan_harian.show', compact('data', 'modul'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = KegiatanPeserta::findOrFail($id);

        return view('widyaiswara.kegiatan_harian.edit', compact('data'));
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
        $data = KegiatanPeserta::findOrFail($id);

        $req = $request->all();
        $waktu_mulai = Carbon::parse($request->waktu_mulai);
        $waktu_selesai = Carbon::parse($request->waktu_selesai);
        $menit = $waktu_mulai->diffInMinutes($waktu_selesai);

        $req['waktu_kegiatan'] = $menit;

        $data->update($req);

        return redirect()->route('userWidyaIswara.kegiatan_harian.index', $data->pelatihan_id)->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = KegiatanPeserta::findOrFail($id);

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
