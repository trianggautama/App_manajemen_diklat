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
      <form action="{{route('userAdmin.penyakit.update',$penyakit->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="card-body">
          <div class="form-group">
            <label for="">Nama Penyakit</label>
            <input type="text" name="nama_penyakit" value="{{$penyakit->nama_penyakit}}" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Uraian</label>
            <input type="text" name="uraian" value="{{$penyakit->uraian}}" class="form-control">
          </div>
        </div>
        <div class="card-footer">
          <a href="{{Route('userAdmin.jenis_diklat.index')}}" class="btn icon icon-left btn-secondary"><i
              data-feather="arrow-left"></i> Kembali</a>
          <button class="btn icon icon-left btn-primary"><i data-feather="save"></i> Ubah Data</button>
        </div>
      </form>
    </div>
  </section>
</div>

@endsection
@section('script')
<script>

</script>
@endsection