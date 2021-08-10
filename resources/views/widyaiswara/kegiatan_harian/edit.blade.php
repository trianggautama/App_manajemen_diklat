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
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Waktu Mulai </label>
                                <input type="time" name="waktu_mulai" class="form-control" value="{{$data->waktu_mulai}}">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Waktu Selesai </label>
                                <input type="time" name="waktu_selesai" class="form-control" value="{{$data->waktu_selesai}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                <button class="btn icon icon-left btn-primary float-end m-1"><i data-feather="save"></i> Ubah Data</button>
                    <a href="{{Route('userWidyaIswara.kegiatan_harian.index',$data->pelatihan_id)}}" class="btn icon icon-left btn-secondary float-end m-1"><i
                            data-feather="arrow-left"></i> Kembali</a>
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