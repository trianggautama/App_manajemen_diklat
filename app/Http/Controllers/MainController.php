<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function admin_beranda()
    {

        return view('admin.index');
    }

    public function widyaiswara_beranda()
    {

        return view('widyaiswara.index');
    }

    public function widyaiswara_profil()
    {

        return view('widyaiswara.profil');
    }

    public function peserta_beranda()
    {
        $pelatihan = Auth::user()->pelatihan;

        return view('peserta.index',compact('pelatihan'));
    }

    public function peserta_profil()
    {

        return view('peserta.profil');
    }
}
