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
                    <a href="{{Route('userAdmin.laporan_aktualisasi.index')}}" class="btn btn-outline-primary block float-end"> <i data-feather="arrow-left" width="20"></i> Kembali </a>                    
                </div>
                </div>
            </div>
            <div class="card-body">
            <table class="table table-striped">
                    <tr>
                        <td width="20%">Nama Pelatihan</td>
                        <td>: -</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Jenis Pelatihan</td>
                        <td>: -</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">tanggal Mulai</td>
                        <td>: -
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Tanggal Selesai</td>
                        <td>:
                            -
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Widyaiswara</td>
                        <td>: -</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Keterangan</td>
                        <td>: -</td>
                        <td></td>
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
                            <a href="" class="btn btn-primary"><i data-feather="paperclip" width="20"></i> File Lampiran</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="20%">Status Verif</td>
                        <td>:
                        <td > <div class="text-warning"> Belum Diverifikasi </div></td>
                    </tr>
                </table>
            </div>
        </div>
        </section>
    </div>

@endsection
@section('script')
<script>

</script>
@endsection
