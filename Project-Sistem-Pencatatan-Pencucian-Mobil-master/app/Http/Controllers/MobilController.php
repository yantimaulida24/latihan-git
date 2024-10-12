<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all();
        return view('mobil', compact('mobils'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_plat_mobil' => 'required|unique:mobils',
            'nama_mobil' => 'required',
            'jenis_mobil' => 'required'
        ]);

        Mobil::create($request->all());
        return redirect()->route('mobil.index')->with('success', 'Mobil berhasil ditambahkan');
    }

    public function edit($no_plat_mobil)
    {
        $mobil = Mobil::find($no_plat_mobil);
        return view('edit-mobil', compact('mobil'));
    }

    public function update(Request $request, $no_plat_mobil)
    {
        $request->validate([
            'no_plat_mobil' => 'required|unique:mobils,no_plat_mobil,' . $no_plat_mobil . ',no_plat_mobil',
            'nama_mobil' => 'required',
            'jenis_mobil' => 'required',
        ]);
    
        $mobil = Mobil::where('no_plat_mobil', $no_plat_mobil)->firstOrFail();
    
        // Update data mobil
        $mobil->no_plat_mobil = $request->no_plat_mobil;
        $mobil->nama_mobil = $request->nama_mobil;
        $mobil->jenis_mobil = $request->jenis_mobil;
        $mobil->save();
    
        return redirect()->route('mobil.index')->with('success', 'Data mobil berhasil diupdate.');
    }

    public function destroy($no_plat_mobil)
    {
        Mobil::find($no_plat_mobil)->delete();
        return redirect()->route('mobil.index')->with('success', 'Mobil berhasil dihapus');
    }
}