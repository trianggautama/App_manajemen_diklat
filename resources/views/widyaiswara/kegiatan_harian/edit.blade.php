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
            <form action="{{route('userAdmin.jenis_diklat.update',1)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Tanggal Kegiatan</label>
                        <input type="date" name="jenis_diklat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Materi</label>
                        <input type="text" name="materi" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Waktu Kegiatan (Menit)</label>
                        <input type="text" name="waktu_kegiatan" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{Route('userWidyaIswara.kegiatan_harian.index')}}" class="btn icon icon-left btn-secondary"><i
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