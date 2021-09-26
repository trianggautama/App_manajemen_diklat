<?php

namespace App\Http\Controllers;

use App\Models\ModulPembelajaran;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ModulPembelajaranController extends Controller
{
    public function store(Request $request)
    {
        $req = $request->all();
        // $req['user_id'] = Auth::user()->id;
        $data = ModulPembelajaran::create($req);

        if ($request->file('file') != null) {

            $file = $request->file('file');

            $file_name = $file->getClientOriginalName();

            $file->move('modul', $file_name);
            $data->file = $file_name;
        }

        $data->update();

        return back()->withSuccess('Data berhasil disimpan');
    }

    public function show(ModulPembelajaran $modul_pembelajaran)
    {
        try {
            $modul_pembelajaran->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
