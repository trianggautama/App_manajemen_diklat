@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Materi Pelatihan {{$pelatihan->nama_pelatihan}}</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header">
                Tabel Data 
                <button type="button" class="btn btn-outline-primary block float-end" data-bs-toggle="modal"
                    data-bs-target="#default">
                    <i data-feather="plus" width="20"></i> Tambah Data
                </button>
                <a href="{{Route('report.kegiatan_pelatihan',$pelatihan->id)}}" class=" btn btn-sm btn-outline-info float-end" target="__blank"><i data-feather="printer"></i> Cetak Data</a>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Materi</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Selesai</th>
                            <th>Durasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{carbon\carbon::parse($d->tanggal_kegiatan)->translatedFormat('d F Y')}}</td>
                            <td>{{$d->materi}}</td>
                            <td>{{Carbon\carbon::parse($d->waktu_mulai)->format('H:i')}} WITA</td>
                            <td>{{Carbon\carbon::parse($d->waktu_selesai)->format('H:i')}} WITA</td>
                            <td>{{$d->waktu_kegiatan}} Menit</td>
                            <td>
                                <form action="{{Route('userWidyaIswara.kegiatan_harian.destroy',$d->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{Route('userWidyaIswara.kegiatan_harian.show',$d->id)}}"
                                    class="btn btn-sm icon icon-left btn-info mb-1"><i data-feather="info"></i>
                                    Detail</a>
                                <a href="{{Route('userWidyaIswara.kegiatan_harian.edit',$d->id)}}"
                                    class="btn btn-sm icon icon-left btn-primary mb-1"><i data-feather="info"></i>
                                    Edit</a>
                                <button type="submit"
                                    class="btn btn-sm icon icon-left btn-danger mb-1"><i data-feather="info"></i>
                                    Hapus</button>
                                </form>
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
            <form action="{{route('userWidyaIswara.kegiatan_harian.store')}}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1">Tambah Data</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="pelatihan_id" value="{{$pelatihan->id}}" id="" required>
                    <div class="form-group">
                        <label for="">Tanggal Kegiatan</label>
                        <input type="date" name="tanggal_kegiatan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Materi</label>
                        <input type="text" name="materi" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Waktu Mulai </label>
                                <input type="time" name="waktu_mulai" class="form-control">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Waktu Selesai </label>
                                <input type="time" name="waktu_selesai" class="form-control">
                            </div>
                        </div>
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