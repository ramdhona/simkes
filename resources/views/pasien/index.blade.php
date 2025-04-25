@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Dashboard Pasien')

{{-- Content body: main page content --}}

@section('content_body')
    <h2 class="mb-3 pt-5">Dashboard Pasien</h2>
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->

            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box for total periksa oleh pasien -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>3</h3>
                            <p>Jumlah Pemeriksaan Anda</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-notes-medical"></i>
                        </div>
                        <a href="/pasien/periksa" class="small-box-footer">Lihat Detail <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box for status terakhir -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Selesai</h3>
                            <p>Status Pemeriksaan Terakhir</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <a href="/pasien/periksa" class="small-box-footer">Lihat Pemeriksaan <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box for info jadwal -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>2 Hari Lagi</h3>
                            <p>Jadwal Pemeriksaan Berikutnya</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <a href="/pasien/periksa" class="small-box-footer">Lihat Jadwal <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box for buat periksa -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><i class="fas fa-plus"></i></h3>
                            <p>Buat Pemeriksaan Baru</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-medical"></i>
                        </div>
                        <a href="/pasien/periksa" class="small-box-footer">Isi Formulir <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-clock"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Waktu Pemeriksaan Terakhir</span>
                            <span class="info-box-number">10 April 2025</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-file-medical-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Total Form Pemeriksaan</span>
                            <span class="info-box-number">3</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-history"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Riwayat Pemeriksaan</span>
                            <span class="info-box-number">Cek Riwayat</span>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-user-circle"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Profil Anda</span>
                            <span class="info-box-number"><a href="/pasien/profile">Lihat Profil</a></span>
                        </div>
                    </div>
                </div>
            </div>

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
