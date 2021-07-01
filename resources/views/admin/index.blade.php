@extends('layouts.main')
@section('content')
<div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Dashboard</h3>
                    <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
                </div>
                <section class="section">
                    <div class="row mb-2">
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>User Admin</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <p>5 </p>
                                            </div>
                                        </div>
                                        <div class="chart-wrapper">
                                            <canvas id="canvas1" style="height:100px !important"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>Widyaiswara</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <p>20 </p>
                                            </div>
                                        </div>
                                        <div class="chart-wrapper">
                                            <canvas id="canvas2" style="height:100px !important"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>pelatihan</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <p>17 </p>
                                            </div>
                                        </div>
                                        <div class="chart-wrapper">
                                            <canvas id="canvas3" style="height:100px !important"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>Perpustakaan</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <p>42 </p>
                                            </div>
                                        </div>
                                        <div class="chart-wrapper">
                                            <canvas id="canvas4" style="height:100px !important"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h3>Selamat Datang</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit facere ratione ducimus ullam dolorum expedita obcaecati accusamus non quae quisquam corporis dignissimos, sequi repellendus ut, unde eligendi esse soluta earum?</p>
                        </div>
                    </div>
                </section>
            </div>
@endsection
@section('script')
<script>

</script>
@endsection
