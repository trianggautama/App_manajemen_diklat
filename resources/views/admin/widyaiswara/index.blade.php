@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
                <div class="page-title">
                    <h3>User Widyaiswara</h3>
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
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Tempat, Tanggal lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>No Hp</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>
                                            <a href="{{Route('userAdmin.widyaiswara.edit','1')}}" class="btn icon icon-left btn-primary mb-1"><i data-feather="edit"></i>
                                            Edit</a>
                                            <a href="#" class="btn icon icon-left btn-danger"><i data-feather="delete"></i>
                                            Hapus</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                  </div>
                </section>
            </div>

            <!--Basic Modal -->
            <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                aria-labelledby="myModalLabel1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel1">Tambah Data</h5>
                            <button type="button" class="close rounded-pill"
                                data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">NIP</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="">Tempat Lahir</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="">Tanggal Lahir</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <label for="" class="mb-2">Jenis Kelamin</label>
                            <div class="row mb-2">
                                <div class="col-md">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Laki - laki</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Perempuan</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">No Hp</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" id="" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Batal</span>
                            </button>
                            <button type="button" class="btn btn-primary ml-1"
                                data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Simpan Data</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('script')
<script>

</script>
@endsection
