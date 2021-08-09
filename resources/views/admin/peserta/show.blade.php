@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>User Peserta / Detail</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header text-right">
               <div class="row">
                   <div class="col-md">
                        Detail Data
                   </div>
                   <div class="col-md d-flex flex-row-reverse">
                        <a href="{{Route('userAdmin.pelatihan.show',$peserta->pelatihan_id)}}" class="btn btn-secondary"><i data-feather="back"></i> Kembali</a>
                        <a href="{{Route('report.biodata_peserta',$peserta->pelatihan_id)}}" class="btn btn-primary"><i data-feather="printer "></i> Cetak Data</a>
                   </div>
               </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <td width="15%">Nip</td>
                        <td width="1%">:</td>
                        <td>{{$peserta->nip}}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{$peserta->nama}}</td>
                    </tr>
                    <tr>
                        <td>Tempat, tanggal lahir</td>
                        <td>:</td>
                        <td>{{$peserta->tempat_lahir}}, {{$peserta->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                        <td>Jenis kelamin</td>
                        <td>:</td>
                        <td>@if($peserta->no_hp == 1) Laki-laki @else Perempuan  @endif</td>
                    </tr>
                    <tr>
                        <td>SKPD</td>
                        <td>:</td>
                        <td>{{$peserta->skpd->nama_skpd}}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td> {{$peserta->alamat}}</td>
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