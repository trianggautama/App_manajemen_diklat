@extends('layouts.main')
@section('content')
    <div class="main-content container-fluid">
        <div class="page-title">
            <h3>Laporan Aktualisasi</h3>
            <p class="text-subtitle text-muted">Pelatihan {{Auth::user()->pelatihan->nama_pelatihan}}</p>
        </div>
        <section class="section">
            <div class="card">
            <div class="card-header text-right">
                <div class="row">
                    <div class="col-md">
                        Detail Pelatihan
                    </div>
                    <div class="col-md ">
                    <button type="button" class="btn btn-outline-primary block float-end" data-bs-toggle="modal" data-bs-target="#default"> <i data-feather="plus" width="20"></i> Tambah Data </button>                    
                </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <td width="20%">Judul Laporan</td>
                        <td width="3px">:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">Uraian Singkat</td>
                        <td>: </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">tanggal Input</td>
                        <td>: 
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td width="20%">File</td>
                        <td>: 
                        </td>
                        <td>
                            <a href="" class="btn btn-primary"><i data-feather="paperclip" width="20"></i> File Lampiran</a>
                        </td>
                    </tr>
                    <tr>
                        <td width="20%">Nama WidyaIswara</td>
                        <td>:
                        <td ></td>
                    </tr>
                    <tr>
                        <td width="20%">Status Verif</td>
                        <td>:
                        <td > <div class="text-warning"> Belum Diverifikasi </div></td>
                    </tr>
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
            <form action="{{Route('userAdmin.pelatihan.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Judul Laporan</label>
                        <input type="text" name="nama_pelatihan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea name="keterangan" id="" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">File Laporan</label>
                        <input type="file" name="kuota" class="form-control">
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
