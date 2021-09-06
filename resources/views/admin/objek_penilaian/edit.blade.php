@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
  <div class="page-title">
    <h3>Objek Penilaian / Data</h3>
  </div>
  <section class="section mt-4">
    <div class="card">
      <div class="card-header text-right">
        Form Edit
      </div>
      <form action="{{route('userAdmin.penyakit.update',1)}}" method="POST">
        @csrf
        @method('put')
        <div class="card-body">
          <div class="form-group">
            <label for="">Objek Penilaian</label>
            <input type="text" name="objek_penilaian" value="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Uraian</label>
            <input type="text" name="uraian" value="" class="form-control">
          </div>
        </div>
        <div class="card-footer">
          <a href="{{Route('userAdmin.objek_penilaian.index')}}" class="btn icon icon-left btn-secondary"><i
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