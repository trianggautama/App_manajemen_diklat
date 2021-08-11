@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Anggaran/ Data</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        Anggaran
                    </div>
                    <div class="col-md">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelatihan</th>
                            <th>Jenis Pelatihan</th>
                            <th>Kuota</th>
                            <th>Total Anggaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->nama_pelatihan}}</td>
                            <td>{{$d->jenis_diklat->jenis_diklat}}</td>
                            <td>{{$d->kuota}}</td>
                            <td>Rp. {{$anggaran->where('pelatihan_id',$d->id)->sum('total')}}</td>
                            <td>
                                <a href="{{Route('userAdmin.anggaran.show',$d->id)}}"  class="btn btn-sm icon icon-left btn-info mb-1"><i data-feather="info"></i> Lihat</a>
                            </td>
                        </tr>
                        @endforeach
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