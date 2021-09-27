@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
  <div class="page-title">
    <h3>Cetak Peserta</h3>
  </div>
  <section class="section mt-4">
    <div class="card">
      <div class="card-header text-right">
        Form filter Cetak
      </div>
      <form action="{{route('report.peserta.filter.cetak')}}" method="GET">
        @csrf
        <div class="card-body">
          <div class="form-group">
            <label for="">Pelatihan</label>
            <select name="pelatihan_id" id="" class="form-control" required  >
                <option value="">- pilih pelatihan -</option>
                @foreach($pelatihan as $p)
                    <option value="{{$p->id}}"> {{$p->nama_pelatihan}} </option>
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