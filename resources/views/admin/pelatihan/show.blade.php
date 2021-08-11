@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Pelatihan / diklat / Detail</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
        <div class="card-header text-right">
            <div class="row">
                <div class="col-md">
                    Detail Data
                </div>
                <div class="col-md">
                    <a href="{{Route('report.pelatihan_detail',$pelatihan->id)}}" class="btn btn-outline-primary float-end" target="__blank"> <i data-feather="printer" width="20"></i> cetak detail permohonan</a>
                </div>
            </div> 
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <td width="20%">Nama Pelatihan</td>
                        <td>: {{$pelatihan->nama_pelatihan}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Jenis Pelatihan</td>
                        <td>: {{$pelatihan->jenis_diklat->jenis_diklat}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">tanggal Mulai</td>
                        <td>: {{carbon\carbon::parse($pelatihan->tanggal_mulai)->translatedFormat('d F Y')}}
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Tanggal Selesai</td>
                        <td>:
                            {{carbon\carbon::parse($pelatihan->tanggal_selesai)->translatedFormat('d F Y')}}
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Widyaiswara</td>
                        <td>: {{$pelatihan->user->nama}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Keterangan</td>
                        <td>: {{$pelatihan->keterangan}}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Kuota Peserta</td>
                        <td>: {{$pelatihan->kuota}}</td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        Anggaran
                    </div>
                    <div class="col-md">
                        <button type="button" class="btn btn-outline-primary block float-end" data-bs-toggle="modal"
                            data-bs-target="#anggaran">
                            <i data-feather="plus" width="20"></i> Tambah Anggaran
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Rekening </th>
                            <th>uraian</th>
                            <th>Anggaran / orang</th>
                            <th>Volume</th>
                            <th>Total (Anggaran * Orang * volume)</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anggaran as $d)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->no_rekening}}</td>
                            <td>{{$d->uraian}}</td>
                            <td>Rp.{{$d->jumlah_anggaran}}</td>
                            <td>{{$d->volume}}</td>
                            <td>Rp.{{$d->total}}</td>
                            <td>
                                <form action="{{Route('userAdmin.anggaran.destroy',$d->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{Route('userAdmin.anggaran.edit', $d->id)}}"
                                        class="btn icon icon-left btn-primary mb-1"><i data-feather="edit"></i>
                                        Edit</a>
                                    <button type="submit" class="btn icon icon-left btn-danger"><i data-feather="delete"></i> Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        Peserta
                    </div>
                    <div class="col-md">
                        <button type="button" class="btn btn-outline-primary block float-end" data-bs-toggle="modal"
                            data-bs-target="#default">
                            <i data-feather="plus" width="20"></i> Tambah Data
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama </th>
                            <th>NIP</th>
                            <th>Tempat, Tanggal lahir</th>
                            <th>No Hp</th>
                            <th>SKPD</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($peserta as $d)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->nama}}</td>
                            <td>{{$d->nip}}</td>
                            <td>{{$d->tempat_lahir}},
                                {{carbon\carbon::parse($d->tanggal_lahir)->translatedFormat('d F Y')}}</td>
                            <td>{{$d->no_hp}}</td>
                            <td>{{$d->skpd->nama_skpd}}</td>
                            <td>
                                <form action="{{Route('userAdmin.peserta.destroy',$d->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{Route('userAdmin.peserta.show', $d->id)}}"
                                        class="btn icon icon-left btn-info mb-1"><i data-feather="info"></i>
                                        Detail</a>
                                    <a href="{{Route('userAdmin.peserta.edit', $d->id)}}"
                                        class="btn icon icon-left btn-primary mb-1"><i data-feather="edit"></i>
                                        Edit</a>
                                    <button type="submit" class="btn icon icon-left btn-danger"><i data-feather="delete"></i> Hapus</button>
                                </form>
                            </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>


<!--Basic Modal -->
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Data</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{route('userAdmin.peserta.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">NIP</label>
                        <input type="text" name="nip" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control">
                            </div>
                        </div>
                    </div>
                    <label for="" class="mb-2">Jenis Kelamin</label>
                    <div class="row mb-2">
                        <div class="col-md">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" name="jenis_kelamin" value="Laki-laki"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="customRadio1">Laki - laki</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" name="jenis_kelamin" value="Perempuan"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">No Hp</label>
                        <input type="text" name="no_hp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">SKPD</label>
                        <select name="skpd_id" id="" class="form-control">
                            @foreach ($skpd as $d)
                            <option value="{{$d->id}}">{{$d->nama_skpd}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Penyakit Bawaan</label>
                        <select name="penyakit_id" id="" class="form-control">
                            <option value="">- penyakit bawaan -</option>
                            @foreach ($penyakit as $d)
                            <option value="{{$d->id}}">{{$d->nama_penyakit}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="pelatihan_id" id="" value="{{$pelatihan->id}}">
                    <input type="hidden" name="role" id="" value="3">
                    <div class="form-group">
                        <label for="">Username / Password = NIP</label>
                    </div>
                    <input type="hidden" name="role" value="3">
                    <div class="d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block"><i data-feather="save" width="20"></i> Simpan Data</span>
                        </button>
                        <button type="button" class="btn" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Batal</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Basic Modal -->
<div class="modal fade text-left" id="anggaran" tabindex="-1" role="dialog" aria-labelledby="anggaran"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Data</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{Route('userAdmin.anggaran.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="pelatihan_id" value="{{$pelatihan->id}}">
                    <div class="form-group">
                        <label for="">No Rekening </label>
                        <input type="text" name="no_rekening" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">uraian</label>
                        <input type="text" name="uraian" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Anggaran / Orang</label>
                        <input type="number" name="jumlah_anggaran" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">volume / orang</label>
                        <input type="number" name="volume" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn float-end" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Batal</span>
                    </button>
                    <button type="submit" class="btn float-end btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Simpan Data</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>

</script>
@endsection