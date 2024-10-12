<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index()
    {
        $mobils = Mobil::all();
        return view('mobil.index', compact('mobil'));
    }

    public function create()
    {
        return view('mobil.create');
    }

    public function store(Request $request)
    {
        Mobil::create($request->all());
        return redirect()->route('mobil.index');
    }

    public function show(Mobil $mobil)
    {
        return view('mobil.show', compact('mobil'));
    }

    public function edit(Mobil $mobil)
    {
        return view('mobil.edit', compact('mobil'));
    }

    public function update(Request $request, Mobil $mobil)
    {
        $mobil->update($request->all());
        return redirect()->route('mobil.index');
    }

    public function destroy(Mobil $mobil)
    {
        $mobil->delete();
        return redirect()->route('mobil.index');
    }
}
