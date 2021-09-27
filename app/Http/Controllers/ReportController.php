<?php

namespace App\Http\Controllers;

use App\Models\Anggaran;
use App\Models\KegiatanPeserta;
use App\Models\LaporanAktualisasi;
use App\Models\Pelatihan;
use App\Models\Penyakit;
use App\Models\Skpd;
use App\Models\User;
use PDF;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function skpd()
    {
        $data   = Skpd::latest()->get();
        $pdf    = PDF::loadView('report.skpd', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan SKPD.pdf');
    }

    public function penyakit()
    {
        $data   = Penyakit::latest()->get();
        $pdf    = PDF::loadView('report.penyakit', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Penyakit.pdf');
    }

    public function widyaiswara()
    {
        $data   = User::where('role',2)->latest()->get();
        $pdf    = PDF::loadView('report.widyaiswara', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Widyaiswara.pdf');
    }

    public function pelatihan()
    {
        $data   = Pelatihan::latest()->get();
        $pdf    = PDF::loadView('report.pelatihan', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan pelatihan.pdf');
    }

    public function anggaran($id)
    {
        $data   = Anggaran::where('pelatihan_id',$id)->latest()->get();
        $pelatihan = Pelatihan::findOrFail($id);
        $data->map(function ($item) {
            $item['total'] = $item->jumlah_anggaran * $item->pelatihan->kuota;

            return $item;
        });

        $pdf    = PDF::loadView('report.anggaran', ['data'=>$data, 'pelatihan'=>$pelatihan]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan anggaran.pdf');
    }

    public function widyaiswara_detail($id)
    {
        $data   = User::findOrFail($id);
        $pelatihan  = Pelatihan::where('user_id',$id)->latest()->get();
        $pdf    = PDF::loadView('report.widyaiswara_detail', ['data'=>$data,'pelatihan'=>$pelatihan]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Widyaiswara Detail.pdf');
    }

    public function biodata_peserta($id)
    {
        $data   = User::findOrFail($id);
        // $pelatihan  = Pelatihan::where('user_id',$id)->latest()->get();
        $pdf    = PDF::loadView('report.biodata_peserta', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Biodata Peserta.pdf');
    }

    public function pelatihan_detail($id)
    { 
        $data   = Pelatihan::findOrFail($id);
        $anggaran = Anggaran::wherePelatihanId($data->id)->get();
        $anggaran->map(function ($item) {
            $item['total'] = $item->jumlah_anggaran * $item->pelatihan->kuota;

            return $item;
        }); 
            
        $pdf    = PDF::loadView('report.pelatihan_detail', ['data'=>$data, 'anggaran'=>$anggaran]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Pelatihan Detail.pdf');
    }

    public function kegiatan_pelatihan($id)
    {
        $pelatihan   = Pelatihan::findOrFail($id);
        $data        = KegiatanPeserta::where('pelatihan_id',$id)->latest()->get();
       
        $pdf    = PDF::loadView('report.kegiatan_pelatihan', ['data'=>$data, 'pelatihan'=>$pelatihan]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Kegiatan Pelatihan.pdf');
    }

    public function laporan_aktualisasi(Request $req)
    {
        $pelatihan   = Pelatihan::findOrFail($req->pelatihan_id);
        $data        = LaporanAktualisasi::where('pelatihan_id',$pelatihan->id)->latest()->get();
       
        $pdf    = PDF::loadView('report.laporan_aktualisasi', ['data'=>$data, 'pelatihan'=>$pelatihan]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Laporan Aktualisasi Pelatihan.pdf');
    }

    public function pelatihan_filter()
    {
        return view('admin.pelatihan.filter');
    }

    public function sertifikat_filter()
    {
        $peserta = User::whereRole(3)->whereHas('laporan')->latest()->get();
        return view('admin.sertifikat.filter',compact('peserta'));
    }

        
    public function sertifikat_filter_cetak(Request $req)
    {
        $data   = User::findOrFail($req->peserta_id);
        $pdf    = PDF::loadView('report.sertifikat_peserta', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Sertifikat Peserta.pdf');
    }

    public function sertifikat_peserta($id)
    {
        $data   = User::findOrFail($id);
        $pdf    = PDF::loadView('report.sertifikat_peserta', ['data'=>$data]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Sertifikat Peserta.pdf');
    }

    public function pelatihan_filter_cetak(Request $req)
    {
        $data         = Pelatihan::whereBetween('tanggal_mulai', [$req->tgl_awal, $req->tgl_akhir])->get();
        $tgl_awal     = $req->tgl_awal;
        $tgl_akhir    = $req->tgl_akhir ;
        $pdf          = PDF::loadView('report.pelatihan_filter', ['data'=>$data,'tgl_awal'=>$tgl_awal,'tgl_akhir'=>$tgl_akhir,]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Pelatihan Filter.pdf');
    }

    public function peserta_filter()
    {
        $pelatihan = Pelatihan::latest()->get();
        return view('admin.peserta.filter',compact('pelatihan'));
    }

    public function peserta_filter_cetak(Request $req)
    {
        $pelatihan   = Pelatihan::findOrFail($req->pelatihan_id); 
        $data        = User::where('role',3)->where('pelatihan_id',$pelatihan->id)->latest()->get();
       
        $pdf    = PDF::loadView('report.peserta', ['data'=>$data, 'pelatihan'=>$pelatihan]);
        $pdf->setPaper('a4', 'potrait'); 
        
        return $pdf->stream('Laporan Peserta.pdf');
    }

}
