@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Periksa')
@section('content_header_title', 'Dokter')
@section('content_header_subtitle', 'Periksa')

{{-- Content body: main page content --}}

@section('content_body')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Periksa Pasien</h3>
                </div>
                <div class="card-body">
                    <table id="dataperiksa" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Pasien</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($periksas as $index => $periksa)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $periksa->tgl_periksa ?? '-' }}</td>
                                    <td>{{ $periksa->pasien->nama ?? '-' }}</td>


                                    <td>
                                        <a href="{{ route('memeriksa.edit', $periksa->id) }}" class="btn btn-success btn-sm">
                                            <i class="fas fa-pen"></i> Edit
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Pasien</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
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
