<?php

namespace App\Http\Controllers;

use App\Models\LaporanAktualisasi;
use App\Models\Pelatihan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function admin_beranda()
    {
        $user           = User::where('role',1)->count();
        $widyaiswara    = User::where('role',2)->count();
        $pelatihan      = Pelatihan::count();
        $laporan        = LaporanAktualisasi::count();

        return view('admin.index',compact('user','widyaiswara','pelatihan','laporan'));
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
