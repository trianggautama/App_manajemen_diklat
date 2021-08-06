@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Laporan Aktualisasi</h3>
        <p class="text-subtitle text-muted">Pelatihan (Nama Pelatihan)</p>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header text-right">
                <div class="row">
                    <div class="col-md">
                        Detail Pelatihan
                    </div>
                    <div class="col-md ">
                        <a href="{{Route('userAdmin.laporan_aktualisasi.index')}}"
                            class="btn btn-outline-primary block float-end"> <i data-feather="arrow-left"
                                width="20"></i> Kembali </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <td width="20%">Nama Pelatihan</td>
                        <td width="3px">:</td>
                        <td>
                            {{$data->pelatihan->nama_pelatihan}}
                        </td>
                    </tr>
                    <tr>
                        <td width="20%">Jenis Pelatihan</td>
                        <td width="3px">:</td>
                        <td>{{$data->pelatihan->jenis_diklat->jenis_diklat}}</td>
                    </tr>
                    <tr>
                        <td width="20%">tanggal Mulai</td>
                        <td width="3px">:
                        </td>
                        <td>{{carbon\carbon::parse($data->pelatihan->tanggal_mulai)->translatedFormat('d F Y')}}</td>
                    </tr>
                    <tr>
                        <td width="20%">Tanggal Selesai</td>
                        <td width="3px">:

                        <td>{{carbon\carbon::parse($data->pelatihan->tanggal_selesai)->translatedFormat('d F Y')}}</td>
                    </tr>
                    <tr>
                        <td width="20%">Widyaiswara</td>
                        <td width="3px">:</td>
                        <td>{{$data->pelatihan->user->nama}}</td>
                    </tr>
                    <tr>
                        <td width="20%">Keterangan</td>
                        <td width="3px">:</td>
                        <td>{{$data->pelatihan->keterangan}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header text-right">
                <div class="row">
                    <div class="col-md">
                        Detail Pelatihan
                    </div>
                    <div class="col-md ">
                    </div>
                </div>
            </div>
            <div class="card-body">
                @isset($data)
                <table class="table table-striped">
                    <tr>
                        <td width="20%">Judul Laporan</td>
                        <td width="3px">:</td>
                        <td>{{$data->judul}}</td>
                    </tr>
                    <tr>
                        <td width="20%">Uraian Singkat</td>
                        <td>: </td>
                        <td>{{$data->keterangan}}</td>
                    </tr>
                    <tr>
                        <td width="20%">tanggal Input</td>
                        <td>:
                        </td>
                        <td>{{carbon\carbon::parse($data->created_at)->translatedFormat('d F Y')}}</td>
                    </tr>
                    <tr>
                        <td width="20%">File</td>
                        <td>:
                        </td>
                        <td>
                            <a href="{{asset('laporan/'.$data->laporan)}}" class="btn btn-primary"><i
                                    data-feather="paperclip" width="20"></i>
                                File
                                Lampiran</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="20%">Nama WidyaIswara</td>
                        <td>:
                        <td>{{$data->pelatihan->user->nama}}</td>
                    </tr>
                    <tr>
                        <td width="20%">Status Verif</td>
                        <td>:
                        <td>
                            @if ($data->status == 0)

                            <div class="text-warning"> Belum Diverifikasi </div>
                            @else
                            <div class="text-primary"> Sudah Diverifikasi </div>

                            @endif
                        </td>
                    </tr>
                </table>
                @else
                <table class="table table-striped">
                    <tr>
                        <td width="20%">Judul Laporan</td>
                        <td width="3px">:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Uraian Singkat</td>
                        <td>: </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">tanggal Input</td>
                        <td>:
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">File</td>
                        <td>:
                        </td>
                        <td>
                            <a href="" class="btn btn-primary"><i data-feather="paperclip" width="20"></i> File
                                Lampiran</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="20%">Nama WidyaIswara</td>
                        <td>:
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Status Verif</td>
                        <td>:
                        <td>
                            <div class="text-warning"> Belum Diverifikasi </div>
                        </td>
                    </tr>
                </table>
                @endisset
            </div>
        </div>
    </section>
</div>

@endsection
@section('script')
<script>

</script>
@endsection