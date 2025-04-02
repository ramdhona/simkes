@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Pasien')
@section('content_header_subtitle', 'Periksa')

{{-- Content body: main page content --}}

@section('content_body')
    <div class="row">
        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Obat</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Anda</label>
                            <input type="text" class="form-control" placeholder="Nama Anda">
                        </div>
                        <div class="form-group">
                            <label>Pilih Dokter</label>
                            <select class="form-control">
                                <option value="">Pilih Dokter</option>
                                <option value="dr_ali">Dr. Ali</option>
                                <option value="dr_budi">Dr. Budi</option>
                                <option value="dr_citra">Dr. Citra</option>
                            </select>
                        </div>



                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
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
