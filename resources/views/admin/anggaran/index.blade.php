@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Anggaran/ Data</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md">
                        Anggaran
                    </div>
                    <div class="col-md">
                    </div>
                </div>
            </div>
            <div class="card-body">
            <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pelatihan </th>
                            <th>Orang</th>
                            <th>hari</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody> 
                       <tr>
                           <td>1</td>
                           <td>Pelatihan 1</td>
                           <td>60 hari</td>
                           <td>35 Orang</td>
                           <td>Rp.200.000.000</td>
                           <td>
                                <a href="{{Route('userAdmin.anggaran.show',1)}}"
                                    class="btn btn-sm icon icon-left btn-info mb-1"><i data-feather="info"></i>
                                    Detail</a>
                           </td>
                       </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
<script>

</script>
@endsection