<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class WidyaiswaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::whereRole(2)->get();
        return view('admin.widyaiswara.index', compact('data'));
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
        $req = $request->all();
        $req['password'] = Hash::make($request->password);
        $data = User::create($req);

        return back()->withSuccess('Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $widyaiswara)
    {
        $pelatihan  = Pelatihan::where('user_id',$widyaiswara->id)->latest()->get();

        return view('admin.widyaiswara.show', compact('widyaiswara','pelatihan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $widyaiswara)
    {
        return view('admin.widyaiswara.edit', compact('widyaiswara'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $widyaiswara)
    {
        $req = $request->except('password');
        if (isset($request->password)) {
            $req['password'] = Hash::make($request->password);
        }

        $widyaiswara->update($req);

        return redirect()->route('userAdmin.widyaiswara.index')->withSuccess('Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $widyaiswara)
    {
        try {
            $widyaiswara->delete();
            return back()->withSuccess('Data berhasil dihapus');
        } catch (QueryException $e) {

            if ($e->getCode() == "23000") {
                return back()->withError('Data gagal dihapus');
            }
        }

    }
}
