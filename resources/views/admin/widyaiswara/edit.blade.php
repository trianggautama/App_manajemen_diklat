@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
                <div class="page-title">
                    <h3>User Widyaiswara / Edit</h3>
                </div>
                <section class="section mt-4">
                  <div class="card">
                    <div class="card-header text-right">
                        Form Edit
                    </div>
                    <div class="card-body">
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
                    <div class="card-footer">
                        <a href="{{Route('userAdmin.widyaiswara.index')}}" class="btn icon icon-left btn-secondary"><i data-feather="arrow-left"></i> Kembali</a>
                        <button class="btn icon icon-left btn-primary"><i data-feather="save"></i> Ubah Data</button>
                    </div>
                  </div>
                </section>
            </div>

@endsection
@section('script')
<script>

</script>
@endsection
