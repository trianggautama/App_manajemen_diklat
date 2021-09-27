@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
  <div class="page-title">
    <h3>Cetak Sertifikat</h3>
  </div>
  <section class="section mt-4">
    <div class="card">
      <div class="card-header text-right">
        Form filter Cetak
      </div>
      <form action="{{route('report.sertifikat_peserta.filter.cetak')}}" method="GET" target="__blank">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="">Peserta</label>
            <select name="peserta_id" id="" class="form-control" required  >
                <option value="">- pilih peserta -</option>
                @foreach($peserta as $p)
                    <option value="{{$p->id}}"> {{$p->nama}} - pelatihan {{$p->pelatihan->nama_pelatihan}} </option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="card-footer">
          <a href="{{Route('userAdmin.laporan_aktualisasi.index')}}" class="btn icon icon-left btn-secondary"><i
              data-feather="arrow-left"></i> Kembali</a>
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