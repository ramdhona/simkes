@extends('layouts.app')

@section('content_body')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">Edit Obat</div>
            <div class="card-body">
                <form action="{{ route('obat.update', $obat->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Nama Obat</label>
                        <input type="text" name="nama_obat" class="form-control" value="{{ $obat->nama_obat }}">
                    </div>
                    <div class="form-group">
                        <label>Kemasan</label>
                        <input type="text" name="kemasan" class="form-control" value="{{ $obat->kemasan }}">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control" value="{{ $obat->harga }}">
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Simpan Perubahan</button>
                    <a href="{{ route('obat.index') }}" class="btn btn-secondary mt-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
