@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Penilaian Peserta</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md"> Detail Data</div>
                    <div class="col-md">
                        <a href="{{Route('userWidyaIswara.kegiatan_harian.index',1)}}"
                            class="btn btn-secondary float-end mx-1"> Kembali</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <td width="15%">Nip</td>
                        <td width="1%">:</td>
                        <td>{{$peserta->nip}}</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{$peserta->nama}}</td>
                    </tr>
                    <tr>
                        <td>Tempat, tanggal lahir</td>
                        <td>:</td>
                        <td>{{$peserta->tempat_lahir.', '.carbon\carbon::parse($peserta->tanggal_lahir)->translatedFormat('d F Y')}}
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis kelamin</td>
                        <td>:</td>
                        <td>{{$peserta->jenis_kelamin}}</td>
                    </tr>
                    <tr>
                        <td>SKPD</td>
                        <td>:</td>
                        <td>{{$peserta->skpd->nama_skpd}}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{$peserta->alamat}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        Penilaian Peserta
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
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Objek Penilaian </th>
                            <th>Nilai</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->objek_penilaian->objek_penilaian}}</td>
                            <td>{{$d->nilai}}</td>
                            <td> <a href="{{Route('userWidyaIswara.penilaian_peserta.destroy',$d->id)}}"
                                    class="btn btn-danger"><i data-feather="delete"></i> </a></td>
                        </tr>
                        @endforeach
                        <tr class="table-info">
                            <td colspan="3">Nilai Rata rata</td>
                            <td>{{$rata}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>


<!--Basic Modal -->
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Tambah Data</h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="{{Route('userWidyaIswara.penilaian_peserta.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="user_id" value="{{$peserta->id}}" id="">
                    <input type="hidden" name="pelatihan_id" value="{{$pelatihan->id}}" id="">
                    <div class="form-group">
                        <select class="form-control" name="objek_penilaian_id" id="">
                            <option value="">-- pilih objek penilaian --</option>
                            @foreach ($objekPenilaian as $d)
                            <option value="{{$d->id}}">{{$d->objek_penilaian}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">nilai</label>
                        <input type="number" class="form-control" name="nilai">
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