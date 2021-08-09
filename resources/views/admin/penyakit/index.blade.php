@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Penyakit Bawaan / Data</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header d-flex flex-row-reverse">
                <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                    data-bs-target="#default">
                    <i data-feather="plus" width="20"></i> Tambah Data
                </button>
                <a href="{{Route('report.penyakit')}}" class=" btn btn-sm btn-outline-info" target="__blank"><i data-feather="printer"></i> Cetak Data</a>
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama penyakit</th>
                            <th>Uraian</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)

                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->nama_penyakit}}</td>
                            <td>{{$d->uraian}}</td>
                            <td class="text-center">
                                <form action="{{Route('userAdmin.penyakit.destroy',$d->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{Route('userAdmin.penyakit.edit', $d->id)}}"
                                        class="btn icon icon-left btn-primary"><i data-feather="edit"></i>
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
            <form action="{{route('userAdmin.penyakit.store')}}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel1">Tambah Data</h5>
                    <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama Penyakit</label>
                        <input type="text" name="nama_penyakit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Uraian</label>
                        <input type="text" name="uraian" class="form-control">
                    </div>
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
@endsection
@section('script')
<script>

</script>
@endsection