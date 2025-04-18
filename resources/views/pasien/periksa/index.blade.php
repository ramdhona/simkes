@extends('layouts.app')

@section('subtitle', 'Welcome')
@section('content_header_title', 'Pasien')
@section('content_header_subtitle', 'Periksa')

@section('content_body')
    <div class="row">
        <div class="col-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Data Periksa</h3>
                </div>
                <form method="POST" action="{{ route('periksa.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Pilih Dokter</label>
                            <select name="id_dokter" class="form-control">
                                <option value="">Pilih Dokter</option>
                                @foreach ($dokters as $dokter)
                                    <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Riwayat Periksa</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Dokter</th>
                                <th>Tanggal</th>
                                <th>Biaya Periksa</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($periksas as $periksa)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $periksa->dokter ? $periksa->dokter->nama : '-' }}</td>
                                    <td>{{ $periksa->tgl_periksa }}</td>
                                    <td>Rp{{ number_format($periksa->biaya_periksa, 0, ',', '.') }}</td>
                                    <td>
                                        @if ($periksa->status == 'Sudah Diperiksa')
                                            <small class="badge badge-success">
                                                <i class="fas fa-check-circle"></i> Sudah Diperiksa
                                            </small>
                                        @else
                                            <small class="badge badge-warning">
                                                <i class="far fa-clock"></i> Belum Diperiksa
                                            </small>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
