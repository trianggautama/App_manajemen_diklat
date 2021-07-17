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
            <form action="{{route('userAdmin.skpd.update',$skpd->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama SKPD</label>
                        <input type="text" name="nama_skpd" value="{{$skpd->nama_skpd}}" class="form-control" required>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{Route('userAdmin.skpd.index')}}" class="btn icon icon-left btn-secondary"><i
                            data-feather="arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn icon icon-left btn-primary"><i data-feather="save"></i> Ubah
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