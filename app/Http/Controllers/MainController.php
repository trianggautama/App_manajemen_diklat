<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
