<?php

namespace App\Http\Controllers;

use App\Models\KegiatanPeserta;
use App\Models\Pelatihan;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class KegiatanPesertaController extends Controller
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

        return view('peserta.kegiatan.index', compact('pelatihan', 'data'));
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
        KegiatanPeserta::create($request->all());

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
        return view('peserta.kegiatan.show', compact('data'));
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

        return view('peserta.kegiatan.edit', compact('data'));
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
        $data->update($request->all());

        return redirect()->route('userWidyaIswara.kegiata_harian.index', $request->pelatihan_id)->withSuccess('Data berhasil diubah');
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
