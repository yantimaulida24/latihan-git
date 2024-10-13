<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Mobil;
use Illuminate\Http\Request;

class PelangganMobilController extends Controller
{
    /**
     * Display a listing of pelanggan and mobil.
     */
    public function index()
    {
        // Mendapatkan semua data pelanggan dan mobil
        $pelanggan = Pelanggan::all();
        $mobil = Mobil::all();

        return view('pelanggan-mobil.index', compact('pelanggan', 'mobil'));
    }

    // =======================
    // Section Pelanggan
    // =======================
    
    public function createPelanggan()
    {
        // Menampilkan form untuk membuat pelanggan baru
        return view('pelanggan.create');
    }

    public function storePelanggan(Request $request)
    {
        // Validasi input pelanggan
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:15',
        ]);

        // Menyimpan data pelanggan
        Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'no_telepon' => $request->no_telepon,
        ]);

        return redirect()->route('pelanggan-mobil.index')->with('success', 'Pelanggan berhasil ditambahkan.');
    }

    public function editPelanggan(Pelanggan $pelanggan)
    {
        // Menampilkan form edit pelanggan
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function updatePelanggan(Request $request, Pelanggan $pelanggan)
    {
        // Validasi input pelanggan
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:15',
        ]);

        // Update data pelanggan
        $pelanggan->update([
            'nama_pelanggan' => $request->nama_pelanggan,
            'no_telepon' => $request->no_telepon,
        ]);

        return redirect()->route('pelanggan-mobil.index')->with('success', 'Pelanggan berhasil diperbarui.');
    }

    public function destroyPelanggan(Pelanggan $pelanggan)
    {
        // Hapus data pelanggan
        $pelanggan->delete();

        return redirect()->route('pelanggan-mobil.index')->with('success', 'Pelanggan berhasil dihapus.');
    }

    // =======================
    // Section Mobil
    // =======================

    public function createMobil()
    {
        // Menampilkan form untuk membuat mobil baru
        return view('mobil.create');
    }

    public function storeMobil(Request $request)
    {
        // Validasi input mobil
        $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'nomor_polisi' => 'required|string|max:15',
        ]);

        // Menyimpan data mobil
        Mobil::create([
            'nama_mobil' => $request->nama_mobil,
            'nomor_polisi' => $request->nomor_polisi,
        ]);

        return redirect()->route('pelanggan-mobil.index')->with('success', 'Mobil berhasil ditambahkan.');
    }

    public function editMobil(Mobil $mobil)
    {
        // Menampilkan form edit mobil
        return view('mobil.edit', compact('mobil'));
    }

    public function updateMobil(Request $request, Mobil $mobil)
    {
        // Validasi input mobil
        $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'nomor_polisi' => 'required|string|max:15',
        ]);

        // Update data mobil
        $mobil->update([
            'nama_mobil' => $request->nama_mobil,
            'nomor_polisi' => $request->nomor_polisi,
        ]);

        return redirect()->route('pelanggan-mobil.index')->with('success', 'Mobil berhasil diperbarui.');
    }

    public function destroyMobil(Mobil $mobil)
    {
        // Hapus data mobil
        $mobil->delete();

        return redirect()->route('pelanggan-mobil.index')->with('success', 'Mobil berhasil dihapus.');
    }
}
