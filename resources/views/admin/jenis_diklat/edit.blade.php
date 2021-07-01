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
            <form action="{{route('userAdmin.jenis_diklat.update',$jenisDiklat->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Jenis Diklat</label>
                        <input type="text" name="jenis_diklat" value="{{$jenisDiklat->jenis_diklat}}"
                            class="form-control">
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