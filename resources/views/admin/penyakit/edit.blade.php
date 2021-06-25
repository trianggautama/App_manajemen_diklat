@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Jenis diklat / Data</h3>
                </div>
                <section class="section mt-4">
                  <div class="card">
                    <div class="card-header text-right">
                        Form EDit
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Penyakit</label>
                            <input type="text" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="">Uraian</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{Route('userAdmin.jenis_diklat.index')}}" class="btn icon icon-left btn-secondary"><i data-feather="arrow-left"></i> Kembali</a>
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
