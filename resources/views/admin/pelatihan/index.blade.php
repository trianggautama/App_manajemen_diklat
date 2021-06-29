@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Pelatihan / Diklat</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header text-right">
                <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                    data-bs-target="#default">
                    Tambah Data
                </button>

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
                        @foreach ($data as $d)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->nama_pelatihan}}</td>
                            <td>{{$d->jenis_diklat->jenis_diklat}}</td>
                            <td>{{carbon\carbon::parse($d->tanggal_mulai)->translatedFormat('d F Y')}}</td>
                            <td>{{carbon\carbon::parse($d->tanggal_selesai)->translatedFormat('d F Y')}}</td>
                            <td>{{$d->kuota}}</td>
                            <td>
                                <a href="{{Route('userAdmin.pelatihan.show',$d->id)}}"
                                    class="btn btn-sm icon icon-left btn-info mb-1"><i data-feather="edit"></i>
                                    Detail</a>
                                <a href="{{Route('userAdmin.pelatihan.edit',$d->id)}}"
                                    class="btn btn-sm icon icon-left btn-primary mb-1"><i data-feather="edit"></i>
                                    Edit</a>
                                <a href="#" class="btn  icon icon-left btn-danger"><i data-feather="delete"></i>
                                    Hapus</a>
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
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Data</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{Route('userAdmin.pelatihan.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Pelatihan</label>
                        <input type="text" name="nama_pelatihan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Pelatihan</label>
                        <select name="jenis_diklat_id" id="" class="form-control">
                            <option value="">- jenis pelatihan -</option>
                            @foreach ($jenisDiklat as $d)
                            <option value="{{$d->id}}">{{$d->jenis_diklat}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Tanggal mulai</label>
                                <input type="date" name="tanggal_mulai" class="form-control">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Tanggal Selesai</label>
                                <input type="date" name="tanggal_selesai" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Widyaiswara</label>
                        <select name="user_id" id="" class="form-control">
                            <option value="">- jenis widyaiswara -</option>
                            @foreach ($user as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan" id="" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Kuota Peserta</label>
                        <input type="number" name="kuota" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Batal</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
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