<?php

namespace App\Http\Controllers;

use App\Models\JenisDiklat;
use App\Models\Pelatihan;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pelatihan::all();
        $jenisDiklat = JenisDiklat::all();
        $user = User::whereRole('2')->get();
        return view('admin.pelatihan.index', compact('data', 'jenisDiklat', 'user'));
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
        $data = Pelatihan::create($request->all());

        return back()->withSuccess('Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pelatihan $pelatihan)
    {
        return view('admin.pelatihan.show', compact('pelatihan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelatihan $pelatihan)
    {
        $jenisDiklat = JenisDiklat::all();
        $user = User::whereRole('2')->get();

        return view('admin.pelatihan.edit', compact('pelatihan', 'jenisDiklat', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelatihan $pelatihan)
    {
        $pelatihan->update($request->all());

        return redirect()->route('userAdmin.pelatihan.index')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelatihan $pelatihan)
    {
        try {
            $pelatihan->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
