@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Anggaran / diklat / Edit</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header text-right">
                Form Edit
            </div>
            <form action="{{Route('userAdmin.anggaran.update',$anggaran->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="">No Rekening </label>
                        <input type="text" name="no_rekening" value="{{$anggaran->no_rekening}}" class="form-control"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="">uraian</label>
                        <input type="text" name="uraian" value="{{$anggaran->uraian}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Anggaran / Orang</label>
                        <input type="number" name="jumlah_anggaran" value="{{$anggaran->jumlah_anggaran}}"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">volume / orang</label>
                        <input type="number" name="volume" value="{{$anggaran->volume}}" class="form-control" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn icon icon-left btn-primary float-right"><i data-feather="save"></i>
                        Ubah
                        Data</button>
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