@extends('layouts.app')

@section('subtitle', 'Periksa')
@section('content_header_title', 'Pasien')
@section('content_header_subtitle', 'Periksa')

@section('content_body')
    <div class="row">
        <div class="col-12">
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
                <div class="card-body">
                    <table id="pasienperiksa" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Dokter</th>
                                <th>Tanggal</th>
                                <th>Biaya Periksa</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($periksas as $index => $periksa)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $periksa->dokter ? $periksa->dokter->nama : '-' }}</td>
                                    <td>{{ $periksa->tgl_periksa }}</td>
                                    <td>Rp{{ number_format($periksa->biaya_periksa, 0, ',', '.') }}</td>
                                    <td>
                                        @if ($periksa->status == 'Sudah Diperiksa')
                                            <span class="badge badge-success">
                                                <i class="fas fa-check-circle"></i> Sudah Diperiksa
                                            </span>
                                        @else
                                            <span class="badge badge-warning">
                                                <i class="far fa-clock"></i> Belum Diperiksa
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Dokter</th>
                                <th>Tanggal</th>
                                <th>Biaya Periksa</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
