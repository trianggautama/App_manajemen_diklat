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
                        <td></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tempat, tanggal lahir</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Jenis kelamin</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>SKPD</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td> </td>
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
                        <tr>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>    <a href="" class="btn btn-danger"><i data-feather="delete"></i> </a></td>
                        </tr>
                        <tr class="table-info">
                            <td colspan="3">Nilai Rata rata</td>
                            <td>80</td>
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
            <form action="{{Route('userAdmin.anggaran.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Pilih Objek Penilaian</label>
                       <select name="objek_penilaian_id" id="">
                           <option value="">-- pilih objek penilaian --</option>
                       </select>
                    </div>
                    <div class="form-group">
                        <label for="">nilai</label>
                        <input type="number" class="form-control" name="nilei">
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