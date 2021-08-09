@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>User Widyaiswara</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header d-flex flex-row-reverse">
                <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                    data-bs-target="#default">
                    <i data-feather="plus" width="20"></i> Tambah Data
                </button>
                <a href="{{Route('report.widyaiswara')}}" class=" btn btn-sm btn-outline-info" target="__blank"><i data-feather="printer"></i> Cetak Data</a>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Tempat, Tanggal lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->nama}}</td>
                            <td>{{$d->nip}}</td>
                            <td>{{$d->tempat_lahir}},
                                {{carbon\carbon::parse($d->tanggal_lahir)->translatedFormat('d F Y')}}</td>
                            <td>{{$d->jenis_kelamin}}</td>
                            <td>
                                <form action="{{Route('userAdmin.widyaiswara.destroy',$d->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{Route('userAdmin.widyaiswara.show',$d->id)}}"  class="btn btn-sm icon icon-left btn-info mb-1"><i data-feather="info"></i> Lihat</a>
                                    <a href="{{Route('userAdmin.widyaiswara.edit', $d->id)}}"
                                        class="btn icon icon-left btn-primary"><i data-feather="edit"></i>
                                        Edit</a>
                                    <button type="submit" class="btn icon icon-left btn-danger"><i data-feather="delete"></i> Hapus</button>
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
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Data</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{route('userAdmin.widyaiswara.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">NIP</label>
                        <input type="text" name="nip" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                            </div>
                        </div>
                    </div>
                    <label for="" class="mb-2">Jenis Kelamin</label>
                    <div class="row mb-2">
                        <div class="col-md">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="jenis_kelamin" value="Laki-laki"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadio1">Laki - laki</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="jenis_kelamin" value="Perempuan"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">No Hp</label>
                        <input type="text" name="no_hp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <input type="hidden" name="role" value="2">
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