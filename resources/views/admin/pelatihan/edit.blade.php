@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Pelatihan / diklat / Edit</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header text-right">
                Form Edit
            </div>
            <form action="{{Route('userAdmin.pelatihan.update',$pelatihan->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Pelatihan</label>
                        <input type="text" name="nama_pelatihan" value="{{$pelatihan->nama_pelatihan}}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Pelatihan</label>
                        <select name="jenis_diklat_id" id="" class="form-control">
                            <option value="">- jenis pelatihan -</option>
                            @foreach ($jenisDiklat as $d)
                            <option value="{{$d->id}}" {{$pelatihan->jenis_diklat_id == $d->id ? 'selected' : ''}}>
                                {{$d->jenis_diklat}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Tanggal mulai</label>
                                <input type="date" name="tanggal_mulai" value="{{$pelatihan->tanggal_mulai}}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Tanggal Selesai</label>
                                <input type="date" name="tanggal_selesai" value="{{$pelatihan->tanggal_selesai}}"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Widyaiswara</label>
                        <select name="user_id" id="" class="form-control">
                            <option value="">- widyaiswara -</option>
                            @foreach ($user as $item)
                            <option value="{{$item->id}}" {{$pelatihan->user_id == $item->id ? 'selected' : ''}}>
                                {{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan" id="" class="form-control">{{$pelatihan->keterangan}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Kuota Peserta</label>
                        <input type="number" name="kuota" value="{{$pelatihan->kuota}}" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{Route('userAdmin.pelatihan.index')}}" class="btn icon icon-left btn-secondary"><i
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