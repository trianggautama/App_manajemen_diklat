@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Laporan Aktualisasi Peserta</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-2">Tabel Data</div>
                    <div class="col-md">
                    <a href="{{Route('userAdmin.laporan_aktualisasi.filter')}}" class=" btn btn-sm btn-outline-info float-end" ><i data-feather="printer"></i> Cetak Data</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelatihan</th>
                            <th>Peserta</th>
                            <th>Judul Laporan</th>
                            <th>Status Verif</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->pelatihan->nama_pelatihan}}</td>
                            <td>{{$d->user->nama}}</td>
                            <td>{{$d->judul}}</td>
                            <td>
                                @if ($d->status == 0)

                                <div class="text-warning"> Belum Diverifikasi </div>
                                @else
                                <div class="text-primary"> Sudah Diverifikasi </div>

                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{Route('userAdmin.laporan_aktualisasi.show',1)}}"
                                    class="btn icon icon-left btn-primary"><i data-feather="info"></i>
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

<!--Basic Modal -->
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <form action="{{route('userAdmin.jenis_diklat.store')}}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1">Tambah Data</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Jenis Diklat</label>
                        <input type="text" name="jenis_diklat" class="form-control">
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block"><i data-feather="save" width="20"></i> Simpan Data</span>
                        </button>
                        <button type="button" class="btn" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Batal</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>

</script>
@endsection