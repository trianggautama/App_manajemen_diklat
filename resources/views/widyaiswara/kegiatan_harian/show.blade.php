@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Detail Kegiatan Harian </h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md"> Detail Data</div>
                    <div class="col-md">
                        <a href="{{Route('userWidyaIswara.kegiatan_harian.index',$data->pelatihan_id)}}"
                            class="btn btn-secondary float-end mx-1"> Kembali</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <td width="20%">Materi</td>
                        <td>:</td>
                        <td>{{$data->materi}}</td>
                    </tr>
                    <tr>
                        <td width="20%">Tanggal Kegiatan</td>
                        <td>:</td>
                        <td>{{$data->tanggal_kegiatan}}</td>
                    </tr>
                    <tr>
                        <td width="20%">Waktu Kegiatan</td>
                        <td>:
                        </td>
                        <td>{{Carbon\carbon::parse($data->waktu_mulai)->format('H:i')}} WITA
                            - {{Carbon\carbon::parse($data->waktu_selesai)->format('H:i')}} WITA</td>
                    </tr>
                    <tr>
                        <td width="20%">Durasi Kegiatan</td>
                        <td>:
                        </td>
                        <td>{{$data->waktu_kegiatan}} Menit</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        Modul Pembelajaran
                    </div>
                    <div class="col-md">
                        <button type="button" class="btn btn-outline-primary block float-end" data-bs-toggle="modal"
                            data-bs-target="#default">
                            <i data-feather="plus" width="20"></i> Tambah Data
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Modul </th>
                            <th>Uraian</th>
                            <th>File</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($modul as $d)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->judul}}</td>
                            <td>{{$d->uraian}}</td>
                            <td><a target="_blank" href="{{asset('modul/'.$d->file)}}" class="btn btn-primary"><i
                                        data-feather="file"></i> </a></td>
                            <td><a href="{{route('userWidyaIswara.modul_pembelajaran.show',$d->id)}}"
                                    class="btn btn-danger"><i data-feather="delete"></i> </a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>


<!--Basic Modal -->
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Data</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{Route('userWidyaIswara.modul_pembelajaran.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="kegiatan_peserta_id" value="{{$data->id}}">
                    <div class="form-group">
                        <label for="">Judul Modul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">uraian</label>
                        <textarea name="uraian" id="" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">File (PDF)</label>
                        <input type="file" name="file" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn float-end" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Batal</span>
                    </button>
                    <button type="submit" class="btn float-end btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan Data</span>
                    </button>
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