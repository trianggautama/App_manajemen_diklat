@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Kegiatan Harian Pelatihan (Nama Pelatihan)</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header">
                Tabel Data
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Materi</th>
                            <th>Waktu kegiatan</th>
                            {{-- <th>Aksi</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{carbon\carbon::parse($d->tanggal_kegiatan)->translatedFormat('d F Y')}}</td>
                            <td>{{$d->materi}}</td>
                            <td>{{$d->waktu_kegiatan}} Menit</td>
                            {{-- <td>
                                <a href="{{Route('userPeserta.kegiatan_harian_peserta.show',$d->id)}}"
                            class="btn btn-sm icon icon-left btn-info mb-1"><i data-feather="info"></i>
                            Detail</a>
                            </td> --}}
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
                        <label for="">Tanggal Kegiatan</label>
                        <input type="date" name="jenis_diklat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Materi</label>
                        <input type="text" name="materi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Waktu Kegiatan (Menit)</label>
                        <input type="text" name="waktu_kegiatan" class="form-control">
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