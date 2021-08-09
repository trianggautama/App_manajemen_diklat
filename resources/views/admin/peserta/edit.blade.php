@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
  <div class="page-title">
    <h3>Peserta Pelatihan / Edit</h3>
  </div>
  <section class="section mt-4">
    <div class="card">
      <div class="card-header text-right">
        Form Edit
      </div>
      <form action="{{route('userAdmin.peserta.update', $peserta->id)}}" method="POST">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="form-group">
                <label for="">NIP</label>
                <input type="text" name="nip" class="form-control" value="{{$peserta->nip}}">
            </div>
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{$peserta->nama}}">
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" value="{{$peserta->tempat_lahir}}">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="{{$peserta->tanggal_lahir}}">
                    </div>
                </div>
            </div>
            <label for="" class="mb-2">Jenis Kelamin</label>
            <div class="row mb-2">
                <div class="col-md">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="jenis_kelamin" value="Laki-laki"
                            class="custom-control-input"
                            {{$peserta->jenis_kelamin == 'Laki-laki' ? 'checked' : ''}}>
                        <label class="custom-control-label" for="customRadio1">Laki - laki</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="jenis_kelamin" value="Perempuan"
                            class="custom-control-input"
                            {{$peserta->jenis_kelamin == 'Perempuan' ? 'checked' : ''}}>
                        <label class="custom-control-label" for="customRadio2">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">No Hp</label>
                <input type="text" name="no_hp" class="form-control" value="{{$peserta->no_hp}}">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="alamat" id="" class="form-control">{{$peserta->alamat}}</textarea>
            </div>
            <div class="form-group">
                <label for="">SKPD</label>
                <select name="skpd_id" id="" class="form-control">
                    @foreach ($skpd as $d)
                    <option value="{{$d->id}}" {{$peserta->skpd_id == $d->id ? 'checked' : ''}}>{{$d->nama_skpd}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" >
            </div>
        </div>
        <div class="card-footer">
          <a href="{{Route('userAdmin.pelatihan.show',$peserta->pelatihan_id)}}" class="btn icon icon-left btn-secondary"><i
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