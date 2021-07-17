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
            <form action="{{Route('userAdmin.pelatihan.update',1)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="">No Rekening </label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">uraian</label>
                        <input type="text" name="NIP" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Anggaran / Orang</label>
                        <input type="text" name="no_hp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">volume / orang</label>
                        <input type="number" name="volume" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn icon icon-left btn-primary float-right"><i data-feather="save"></i> Ubah
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