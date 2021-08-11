@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Anggaran/ Data Pelatihan {{$pelatihan->nama_pelatihan}}</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        Anggaran {{$pelatihan->nama_pelatihan}}
                    </div>
                    <div class="col-md">
                        <a href="{{Route('report.anggaran',$pelatihan->id)}}" class=" btn btn-sm btn-outline-info float-end" target="__blank"><i data-feather="printer"></i> Cetak Data</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Rekening </th>
                            <th>uraian</th>
                            <th>Anggaran / orang</th>
                            <th>Volume</th>
                            <th>Total (Anggaran * Orang * volume)</th>
                            <!-- <th>Aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anggaran as $d)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->no_rekening}}</td>
                            <td>{{$d->uraian}}</td>
                            <td>Rp.{{$d->jumlah_anggaran}}</td>
                            <td>{{$d->volume}}</td>
                            <td>Rp.{{$d->total}}</td>
                            <!-- <td>
                                <form action="{{Route('userAdmin.anggaran.destroy',$d->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{Route('userAdmin.anggaran.edit', $d->id)}}"
                                        class="btn icon icon-left btn-primary mb-1"><i data-feather="edit"></i>
                                        Edit</a>
                                    <button type="submit" class="btn icon icon-left btn-danger"><i data-feather="delete"></i> Hapus</button>
                                </form>
                            </td> -->
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