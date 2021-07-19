@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Riwayat Pelatihan / Diklat</h3>
    </div>
    <section class="section mt-4">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <table class='table table-striped' id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pelatihan</th>
                            <th>Jenis Pelatihan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Kuota</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                <a href="{{Route('userWidyaIswara.pelatihan_widyaiswara.show','1')}}"
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