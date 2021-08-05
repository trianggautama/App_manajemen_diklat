@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Pelatihan / diklat / Detail</h3>
    </div>
    <section class="section mt-4">
        <div class="card"> 
            <div class="card-header">
              <div class="row">
                  <div class="col-md">  Detail Data</div>
                  <div class="col-md">
                        <a href="{{Route('userWidyaIswara.pelatihan_widyaiswara.index')}}" class="btn btn-secondary float-end mx-1"> Kembali</a>
                        <a href="{{Route('userWidyaIswara.kegiatan_harian.index')}}" class="btn btn-info float-end"> Kegiatan Harian</a>
                  </div>
              </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <td width="20%">Nama Pelatihan</td>
                        <td>: -</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Jenis Pelatihan</td>
                        <td>: -</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">tanggal Mulai</td>
                        <td>: -
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Tanggal Selesai</td>
                        <td>:
                            
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Widyaiswara</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Keterangan</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Kuota Peserta</td>
                        <td>:</td>
                        <td></td>
                    </tr>
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
                        <!-- <button type="button" class="btn btn-outline-primary block float-end" data-bs-toggle="modal"
                            data-bs-target="#default">
                            <i data-feather="plus" width="20"></i> Tambah Data
                        </button> -->
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
                       <tr>
                           <td colspan="6">-</td>
                           <td><a href="{{Route('userWidyaIswara.laporan_aktualisasi.show',1)}}" class="btn btn-info mb-1"><i data-feather="file"></i>Laporan Aktualisasi</a><a href="" class="btn btn-primary"><i data-feather="info"></i> info</a></td>
                       </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
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