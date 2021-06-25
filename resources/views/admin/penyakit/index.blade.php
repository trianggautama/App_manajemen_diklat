@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Penyakit Bawaan / Data</h3>
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
                                        <th>Nama penyakit</th>
                                        <th>Uraian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Jantung</td>
                                        <td>-</td>
                                        <td>
                                            <a href="{{Route('userAdmin.penyakit.edit','1')}}" class="btn icon icon-left btn-primary"><i data-feather="edit"></i>
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
                            <label for="">Nama Penyakit</label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="">Uraian</label>
                            <input type="text" class="form-control">
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
