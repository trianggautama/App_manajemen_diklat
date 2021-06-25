@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Pelatihan / diklat / Edit</h3>
                </div>
                <section class="section mt-4">
                  <div class="card">
                    <div class="card-header text-right">
                        Form Edit
                    </div>
                    <div class="card-body">
                            <div class="form-group">
                                <label for="">Nama Pelatihan</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Pelatihan</label>
                                <select name="" id="" class="form-control">
                                    <option value="">- jenis pelatihan -</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="">Tanggal mulai</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="">Tanggal Selesai</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Widyaiswara</label>
                                <select name="" id="" class="form-control">
                                    <option value="">- jenis widyaiswara -</option>
                                </select>
                            </div>s
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <textarea name="" id="" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Kuota Peserta</label>
                                <input type="number" class="form-control">
                            </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{Route('userAdmin.pelatihan.index')}}" class="btn icon icon-left btn-secondary"><i data-feather="arrow-left"></i> Kembali</a>
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
