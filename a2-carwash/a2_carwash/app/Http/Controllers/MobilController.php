<?php

namespace App\Http\Controllers;

use App\Models\Mobil; // Pastikan model Mobil diimport
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all();
        return view('mobil.index', compact('mobil')); // Pastikan nama view sesuai
    }

    public function create()
    {
        return view('mobil.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mobil' => 'required',
            'jenis_mobil' => 'required',
            'no_plat' => 'required|unique:mobil,no_plat'
        ]);

        Mobil::create($request->all());
        return redirect()->route('mobil.index')->with('success', 'Mobil berhasil ditambahkan.');
    }
}
