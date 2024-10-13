<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    // Menampilkan daftar transaksi
    public function index()
    {
        // Mengambil semua data transaksi
        $transaksi = Transaksi::all();

        // Mengembalikan view transaksi.index dengan data transaksi
        return view('transaksi.index', compact('transaksi'));
    }

    // Menampilkan form tambah transaksi
    public function create()
    {
        return view('transaksi.create');
    }

    // Menyimpan data transaksi baru
    public function store(Request $request)
    {
        // Validasi input dari request
        $request->validate([
            'id_pelanggan' => 'required|integer',  // Tambahkan validasi untuk id_pelanggan
            'no_plat_mobil' => 'required|string|regex:/^[A-Z0-9\s]+$/',
            'metode_pembayaran' => 'required|string|max:50',
            'total_pembayaran' => 'required|numeric|min:0',
            'tanggal_transaksi' => 'required|date',
            'status' => 'required|string|max:50',
        ]);

        // Jika validasi berhasil, simpan data transaksi baru
        Transaksi::create([
            'id_pelanggan' => $request->id_pelanggan,  // Simpan id_pelanggan
            'no_plat_mobil' => $request->no_plat_mobil,
            'metode_pembayaran' => $request->metode_pembayaran,
            'total_pembayaran' => $request->total_pembayaran,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'status' => $request->status,
        ]);

        // Redirect ke halaman index transaksi dengan pesan sukses
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    // Menampilkan form edit transaksi
    public function edit(Transaksi $transaksi)
    {
        return view('transaksi.edit', compact('transaksi'));
    }

    // Memperbarui data transaksi yang sudah ada
    public function update(Request $request, Transaksi $transaksi)
    {
        // Validasi input dari request
        $request->validate([
            'id_pelanggan' => 'required|integer',  // Tambahkan validasi untuk id_pelanggan
            'no_plat_mobil' => 'required|string|regex:/^[A-Z0-9\s]+$/',
            'metode_pembayaran' => 'required|string|max:50',
            'total_pembayaran' => 'required|numeric|min:0',
            'status' => 'required|string|max:50',
        ]);

        // Jika validasi berhasil, perbarui data transaksi
        $transaksi->update([
            'id_pelanggan' => $request->id_pelanggan,  // Simpan id_pelanggan
            'no_plat_mobil' => $request->no_plat_mobil,
            'metode_pembayaran' => $request->metode_pembayaran,
            'total_pembayaran' => $request->total_pembayaran,
            'status' => $request->status,
        ]);

        // Redirect ke halaman index transaksi dengan pesan sukses
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    // Menghapus transaksi
    public function destroy(Transaksi $transaksi)
    {
        // Hapus transaksi
        $transaksi->delete();

        // Redirect ke halaman index transaksi dengan pesan sukses
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
