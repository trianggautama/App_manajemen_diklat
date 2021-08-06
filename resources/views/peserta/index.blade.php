@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Beranda</h3>
        <p class="text-subtitle text-muted">Beranda User Peserta</p>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <h3>Selamat Datang ({{Auth::user()->nama}})</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit facere ratione ducimus ullam dolorum
                    expedita obcaecati accusamus non quae quisquam corporis dignissimos, sequi repellendus ut, unde
                    eligendi esse soluta earum?</p>
            </div>
        </div>
        <!-- <div class="card">
            <div class="card-header text-right">
                <div class="row">
                    <div class="col-md">
                        Detail Pelatihan
                    </div>
                    <div class="col-md ">
                        <a href="{{Route('userPeserta.kegiatan_harian_peserta.index',$pelatihan->id)}}"
                            class="btn btn-primary float-end"> <i data-feather="calendar" width="20"></i> Kegiatan
                            Harian</a>
                    </div>
                </div>
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
                </table>
            </div>
        </div> -->
    </section>
</div>
@endsection
@section('script')
<script>

</script>
@endsection