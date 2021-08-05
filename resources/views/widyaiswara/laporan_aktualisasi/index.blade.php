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
                    <button type="button" class="btn btn-outline-primary block float-end" data-bs-toggle="modal" data-bs-target="#default"> <i data-feather="check" width="20"></i> Verifikasi Laporan </button>                    
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
                        <td width="20%">Nama WidyaIswara</td>
                        <td>:
                        <td ></td>
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
