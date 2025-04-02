@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')

{{-- Content body: main page content --}}

@section('content_body')
    <h2 class="mb-3 pt-5">Dashboard Pasien</h2>
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-procedures"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Riwayat Periksa</span>
                            <span class="info-box-number">
                                25

                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-pills"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Obat</span>
                            <span class="info-box-number">50</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"> <i class="fas fa-user-md  "></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Dokter</span>
                            <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
            </div>
            <!-- /.row -->


            <!-- /.row -->
        </div><!--/. container-fluid -->
    </section>

@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@endpush
