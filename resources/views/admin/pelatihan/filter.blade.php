@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
  <div class="page-title">
    <h3>Cetak Filter Pelatihan</h3>
  </div>
  <section class="section mt-4">
    <div class="card">
      <div class="card-header text-right">
        Form filter Cetak
      </div>
      <form action="{{route('report.pelatihan.filter.cetak')}}" method="GET">
        @csrf
        <div class="card-body">
            <div class="row">
              <div class="col-md">
                    <div class="form-group">
                        <label for="">tanggal mulai </label>
                        <input type="date" name="tgl_awal" class="form-control">
                    </div>
              </div>
              <div class="col-md">
                    <div class="form-group">
                        <label for="">tanggal Akhir </label>
                        <input type="date" name="tgl_akhir" class="form-control">
                    </div>
              </div>
            </div>
        </div>
        <div class="card-footer">
          <a href="{{Route('userAdmin.pelatihan.index')}}" class="btn icon icon-left btn-secondary"><i data-feather="arrow-left"></i> Kembali</a>
          <button class="btn icon icon-left btn-primary"><i data-feather="printer"></i> Cetak Data</button>
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