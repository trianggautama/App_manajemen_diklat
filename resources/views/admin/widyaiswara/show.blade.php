@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>User Widyaiswara / Detail</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header text-right">
               <div class="row">
                   <div class="col-md">
                        Detail Data
                   </div>
                   <div class="col-md d-flex flex-row-reverse">
                        <a href="{{Route('userAdmin.widyaiswara.index')}}" class="btn btn-secondary"><i data-feather="back"></i> Kembali</a>
                   </div>
               </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <td width="15%">Nip</td>
                        <td width="1%">:</td>
                        <td>{{$widyaiswara->nip}}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{$widyaiswara->nama}}</td>
                    </tr>
                    <tr>
                        <td>Tempat, tanggal lahir</td>
                        <td>:</td>
                        <td>{{$widyaiswara->tempat_lahir}}, {{$widyaiswara->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                        <td>Jenis kelamin</td>
                        <td>:</td>
                        <td>@if($widyaiswara->no_hp == 1) Laki-laki @else Perempuan  @endif</td>
                    </tr>
                    <tr>
                        <td>No Hp</td>
                        <td>:</td>
                        <td> {{$widyaiswara->no_hp}}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td> {{$widyaiswara->alamat}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Pelatihan
            </div>
            <div class="card-body">
            <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelatihan</th>
                            <th>Jenis Pelatihan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Kuota</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                           <td></td>
                       </tr>
                    </tbody>
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