<?php

namespace App\Http\Controllers;

use App\Models\Periksa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Obat;
use Carbon\Carbon;


class PeriksaController extends Controller
{
    public function index()
    {
        if (Auth::user()->role == 'dokter') {
            // Dokter hanya melihat periksa yang ditangani oleh dirinya
            $periksas = Periksa::with('pasien')
                ->where('id_dokter', Auth::id())
                ->orderBy('tgl_periksa', 'desc')
                ->get();

            return view('dokter.periksa.index', compact('periksas'));
        } else {
            // Pasien melihat daftar periksanya sendiri
            $periksas = Periksa::with('dokter')
                ->where('id_pasien', Auth::id())
                ->orderBy('tgl_periksa', 'desc')
                ->get();

            $dokters = User::where('role', 'dokter')->get();

            return view('pasien.periksa.index', compact('periksas', 'dokters'));
        }
    }

    public function create()
    {
        $dokters = User::where('role', 'dokter')->get();
        return view('pasien.periksa.create', compact('dokters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_dokter' => 'required|exists:users,id',
        ]);

        Periksa::create([
            'id_pasien' => Auth::id(),
            'id_dokter' => $request->id_dokter,
            'tgl_periksa' => now(),
            'catatan' => '',
            'biaya_periksa' => 0,
        ]);

        // return redirect()->back()->with('success', 'Data periksa berhasil ditambahkan.');
        return redirect()->route('periksa.index')->with('success', 'Data periksa berhasil diperbarui.');

    }
    public function edit($id)
    {
        // Pastikan hanya dokter yang bisa mengakses
        $periksa = Periksa::with(['pasien'])->findOrFail($id);
        $obats = Obat::all(); // Mengambil semua obat yang tersedia
        
        // Mengecek apakah dokter yang login adalah dokter yang menangani periksa ini
        if ($periksa->id_dokter != Auth::id()) {
            abort(403, 'Unauthorized action.');
        }
    
        return view('dokter.periksa.edit', compact('periksa', 'obats'));
    }
    
    
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'catatan' => 'nullable|string',
            'id_obat' => 'nullable|exists:obat,id',
        ]);
    
        $periksa = Periksa::where('id', $id)
            ->where('id_dokter', Auth::id())
            ->firstOrFail();
    
        // Cek dan ambil harga obat jika ada
        $harga_obat = 0;
        if ($request->id_obat) {
            $obat = \App\Models\Obat::find($request->id_obat);
            if ($obat) {
                $harga_obat = $obat->harga;
            }
        }
    
      

        $periksa->update([
            'catatan' => $request->catatan,
            'id_obat' => $request->id_obat,
            'biaya_periksa' => $harga_obat,
            'status' => 'Sudah Diperiksa', // status sudah diperiksa
            'tgl_periksa' => Carbon::parse($request->tgl_periksa), // Konversi string menjadi Carbon
        ]);
        
        
        
    
        return redirect()->route('memeriksa.index')->with('success', 'Data periksa berhasil diperbarui.');
    }
    


}
