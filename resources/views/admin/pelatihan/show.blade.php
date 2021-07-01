@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Pelatihan / diklat / Detail</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header text-right">
                Detail Data
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <td width="20%">Nama Pelatihan</td>
                        <td>: {{$pelatihan->nama_pelatihan}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Jenis Pelatihan</td>
                        <td>: {{$pelatihan->jenis_diklat->jenis_diklat}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">tanggal Mulai</td>
                        <td>: {{carbon\carbon::parse($pelatihan->tanggal_mulai)->translatedFormat('d F Y')}}
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Tanggal Selesai</td>
                        <td>:
                            {{carbon\carbon::parse($pelatihan->tanggal_selesai)->translatedFormat('d F Y')}}
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Widyaiswara</td>
                        <td>: {{$pelatihan->user->nama}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Keterangan</td>
                        <td>: {{$pelatihan->keterangan}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Kuota Peserta</td>
                        <td>: {{$pelatihan->kuota}}</td>
                        <td></td>
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