@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Beranda</h3>
                    <p class="text-subtitle text-muted">Beranda User WidyaIswara</p>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{asset('admin/assets/images/avatar/avatar-s-1.png')}}" alt="" srcset="" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card">
                                <div class="card-header">
                                   <div class="row">
                                       <div class="col-md"> Biodata Widyaiswara</div>
                                       <div class="col-md text-right">
                                       <button type="button" class="btn btn-outline-primary block float-end" data-bs-toggle="modal"
                                            data-bs-target="#default">
                                            <i data-feather="edit" width="20"></i> Edit Profil
                                        </button>
                                       </div>
                                   </div> 
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <tr>
                                            <td width="30%">Nip</td>
                                            <td width="1%">:</td>
                                            <td>{{Auth::user()->nip}}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td>:</td>
                                            <td>{{Auth::user()->nama}}</td>
                                        </tr>
                                        <tr>
                                            <td>Tempat, tanggal lahir</td>
                                            <td>:</td>
                                            <td>{{Auth::user()->tempat_lahir}}, {{Carbon\carbon::parse(Auth::user()->tanggal_lahir)->translatedFormat('d F Y')}}</td>
                                        </tr>
                                        <tr>
                                            <td>Jenis kelamin</td>
                                            <td>:</td>
                                            <td>@if(Auth::user()->no_hp == 1) Laki-laki @else Perempuan  @endif</td>
                                        </tr>
                                        <tr>
                                            <td>No Hp</td>
                                            <td>:</td>
                                            <td> {{Auth::user()->no_hp}}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td> {{Auth::user()->alamat}}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
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
                        <label for="">No Hp</label>
                        <input type="text" name="no_hp" class="form-control" value="{{Auth::user()->no_hp}}">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="" class="form-control">{{Auth::user()->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
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
