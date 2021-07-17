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
                            <th>Pelatihan </th>
                            <th>Jumlah Hari</th>
                            <th>Orang</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->pelatihan->nama_pelatihan}}</td>
                            <td>{{carbon\carbon::parse($d->pelatihan->tanggal_mulai)->diffInDays($d->pelatihan->tanggal_selesai)}}
                                hari</td>
                            <td>{{$d->pelatihan->kuota}} Orang</td>
                            <td>Rp.{{$d->total}}</td>
                            <td>
                                <a href="{{Route('userAdmin.anggaran.show',1)}}"
                                    class="btn btn-sm icon icon-left btn-info mb-1"><i data-feather="info"></i>
                                    Detail</a>
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