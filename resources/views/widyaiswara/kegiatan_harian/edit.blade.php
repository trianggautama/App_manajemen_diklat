@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Jenis diklat / Data</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header text-right">
                Form Edit
            </div>
            <form action="{{route('userWidyaIswara.kegiatan_harian.update',$data->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Tanggal Kegiatan</label>
                        <input type="date" name="tanggal_kegiatan" class="form-control" value="{{$data->tanggal_kegiatan}}">
                    </div>
                    <div class="form-group">
                        <label for="">Materi</label>
                        <input type="text" name="materi" class="form-control" value="{{$data->materi}}">
                    </div>
                    <div class="form-group">
                        <label for="">Waktu Kegiatan (Menit)</label>
                        <input type="text" name="waktu_kegiatan" class="form-control" value="{{$data->waktu_kegiatan}}">
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{Route('userWidyaIswara.kegiatan_harian.index',$data->pelatihan_id)}}" class="btn icon icon-left btn-secondary"><i
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