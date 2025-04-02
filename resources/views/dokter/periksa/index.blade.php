@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Dokter')
@section('content_header_subtitle', 'Periksa')

{{-- Content body: main page content --}}

@section('content_body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Periksa</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ID Periksa</th>
                                <th>Pasien</th>
                                <th>Tanggal Periksa</th>
                                <th>Catatan</th>
                                <th>Biaya Periksa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>PRK001</td>
                                <td>Budi Santoso</td>
                                <td>2024-04-01</td>
                                <td>Demam dan sakit kepala</td>
                                <td>Rp 150.000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>PRK002</td>
                                <td>Siti Aminah</td>
                                <td>2024-04-02</td>
                                <td>Batuk dan pilek</td>
                                <td>Rp 120.000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>PRK003</td>
                                <td>Joko Widodo</td>
                                <td>2024-04-03</td>
                                <td>Kontrol tekanan darah</td>
                                <td>Rp 200.000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>PRK004</td>
                                <td>Rina Sari</td>
                                <td>2024-04-04</td>
                                <td>Pemeriksaan rutin</td>
                                <td>Rp 180.000</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>PRK005</td>
                                <td>Andi Pratama</td>
                                <td>2024-04-05</td>
                                <td>Sakit perut</td>
                                <td>Rp 130.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

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
