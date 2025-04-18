@extends('layouts.app')

@section('subtitle', 'Periksa')
@section('content_header_title', 'Edit Data Periksa')
@section('content_body')
    <form action="{{ route('memeriksa.update', $periksa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Nama Pasien</label>
            <input type="text" class="form-control" value="{{ $periksa->pasien->nama ?? '-' }}" readonly>
        </div>

        <div class="form-group">
            <label>Tanggal Periksa</label>
            <input type="date" class="form-control" name="tgl_periksa"
                value="{{ old('tgl_periksa', $periksa->tgl_periksa ? \Carbon\Carbon::parse($periksa->tgl_periksa)->toDateString() : '') }}">

        </div>

        <div class="form-group">
            <label>Catatan</label>
            <textarea name="catatan" class="form-control" rows="4">{{ old('catatan', $periksa->catatan) }}</textarea>
        </div>

        <div class="form-group">
            <label>Pilih Obat</label>
            <select name="id_obat" id="id_obat" class="form-control">
                <option value="">-- Pilih Obat --</option>
                @foreach ($obats as $obat)
                    <option value="{{ $obat->id }}" data-harga="{{ $obat->harga }}"
                        {{ $periksa->id_obat == $obat->id ? 'selected' : '' }}>
                        {{ $obat->nama_obat }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Harga Obat</label>
            <input type="text" id="harga_obat" class="form-control" readonly
                value="{{ old('harga', $periksa->obat->harga ?? '') }}">
        </div>


        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

@push('js')
    <script>
        const selectObat = document.getElementById('id_obat');
        const hargaObat = document.getElementById('harga_obat');

        function updateHarga() {
            const selected = selectObat.options[selectObat.selectedIndex];
            const harga = selected.dataset.harga || '';
            hargaObat.value = harga;
        }

        selectObat.addEventListener('change', updateHarga);

        // ✅ Menjalankan updateHarga hanya jika ada selected option
        window.onload = () => {
            if (selectObat.value) {
                updateHarga();
            }
        };
    </script>
@endpush
