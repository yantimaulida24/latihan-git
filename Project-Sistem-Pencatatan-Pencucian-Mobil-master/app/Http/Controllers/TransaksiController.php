<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        // Mengambil semua data transaksi
        $transaksi = Transaksi::all();

        // Hanya kembalikan view ini tanpa return lainnya
        return view('transaksi.index', compact('transaksi'));
    }

    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
        // Validasi input dari request
        $request->validate([
            'id_pelanggan' => 'required|integer',
            'tanggal_transaksi' => 'required|date',
            'no_plat_mobil' => 'required|string|max:50',
            'metode_pembayaran' => 'required|string|max:50',
            'total_pembayaran' => 'required|numeric',
            'status' => 'required|string|max:50',
        ]);

        // Jika validasi berhasil, simpan data transaksi baru
        Transaksi::create([
            'id_pelanggan' => $request->id_pelanggan,
            'tanggal_transaksi' => $request->tanggal_transaksi,
            'no_plat_mobil' => $request->no_plat_mobil,
            'metode_pembayaran' => $request->metode_pembayaran,
            'total_pembayaran' => $request->total_pembayaran,
            'status' => $request->status,
        ]);

        // Redirect ke halaman index transaksi
        return redirect()->route('transaksi.index')->with('success', 'Transaksi created successfully.');
    }

    public function edit(Transaksi $transaksi)
    {
        return view('transaksi.edit', compact('transaksi'));
    }

    public function update(Request $request, Transaksi $transaksi)
    {
        // Validasi input dari request
        $request->validate([
            'id_pelanggan' => 'required|integer',
            'no_plat_mobil' => 'required|string|max:50',
            'metode_pembayaran' => 'required|string|max:50',
            'total_pembayaran' => 'required|numeric',
            'status' => 'required|string|max:50',
        ]);

        // Jika validasi berhasil, perbarui data transaksi
        $transaksi->update([
            'id_pelanggan' => $request->id_pelanggan,
            'no_plat_mobil' => $request->no_plat_mobil,
            'metode_pembayaran' => $request->metode_pembayaran,
            'total_pembayaran' => $request->total_pembayaran,
            'status' => $request->status,
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi updated successfully.');
    }

    public function destroy(Transaksi $transaksi)
    {
        // Hapus transaksi
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi deleted successfully.');
    }
}
