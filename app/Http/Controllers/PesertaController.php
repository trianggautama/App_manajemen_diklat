<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use App\Models\Penyakit;
use App\Models\Skpd;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::whereRole(2)->get();
        return view('admin.peserta.index', compact('data'));
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
        $pelatihan = Pelatihan::findOrFail($request->pelatihan_id);
        if ($pelatihan->peserta->count() >= $pelatihan->kuota) {
            return back()->withWarning('Kuota peserta sudah habis');
        } else {

            $req = $request->all();

            $req['username'] = $request->nip;
            $req['password'] = Hash::make($request->nip);
            $data = User::create($req);

            return back()->withSuccess('Data berhasil disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $peserta = User::findOrFail($id);
        return view('admin.peserta.show', compact('peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $skpd = Skpd::latest()->get();
        $peserta = User::findOrFail($id);
        $penyakit = Penyakit::all();
        return view('admin.peserta.edit', compact('peserta', 'skpd', 'penyakit'));
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
        $peserta = User::findOrFail($id);
        $req = $request->except('password');
        if (isset($request->password)) {
            $req['password'] = Hash::make($request->password);
        }

        $peserta->update($req);
        return redirect()->route('userAdmin.pelatihan.show', $peserta->pelatihan_id)->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $peserta = User::findOrFail($id);
            $peserta->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
