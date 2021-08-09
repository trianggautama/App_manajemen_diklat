@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Laporan Aktualisasi</h3>
        <p class="text-subtitle text-muted">Pelatihan {{$data->pelatihan->nama_pelatihan}}</p>
    </div>
    <section class="section">
        <div class="card"> 
            <div class="card-header text-right">
                <div class="row">
                    <div class="col-md">
                        Detail Pelatihan
                    </div>
                    <div class="col-md ">
                    @if($data->status == 0)
                        <a href="{{route('userWidyaIswara.laporan_aktualisasi.edit', $data->id)}}" class="btn btn-sm btn-primary float-end"><i  data-feather="check" width="20"></i> Verifikasi</a>
                    @endif
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
                            -
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
                            <div class="text-warning"> Belum di input </div>
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