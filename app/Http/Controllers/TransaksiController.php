<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Mobil;
use App\Models\Akun;

class TransaksiController extends Controller
{
    // Menampilkan daftar transaksi
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    // Menampilkan form tambah transaksi
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $mobil = Mobil::all();
        $akun = Akun::all();
        return view('transaksi.create', compact('pelanggan', 'mobil', 'akun'));
    }

    // Menyimpan data transaksi baru
    public function store(Request $request)
    {

        
Transaksi::create($request->all());
        return redirect()->to('transaksi')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    // Menampilkan form edit transaksi
    public function edit(Transaksi $transaksi)
    {
        return view('transaksi.edit', compact('transaksi'));
    }

    // Memperbarui data transaksi yang sudah ada
    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'id_pelanggan' => 'required|integer',
            'no_plat_mobil' => 'required|string|regex:/^[A-Z0-9\s]+$/',
            'metode_pembayaran' => 'required|string|max:50',
            'total_pembayaran' => 'required|numeric|min:0',
            'status' => 'required|string|max:50',
        ]);

        $transaksi->update($request->all());

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    // Menghapus transaksi
    public function destroy(Transaksi $transaksi)
    {
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
