@extends('layout')

@section('content')
    <h1>Edit Mobil</h1>

    <form action="{{ route('mobil.update', $mobil->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Jenis Mobil:</label>
        <input type="text" name="jenis_mobil" value="{{ $mobil->jenis_mobil }}">
        <label>No Plat Mobil:</label>
        <input type="text" name="no_plat_mobil" value="{{ $mobil->no_plat_mobil }}">
        <label>Nama Mobil:</label>
        <input type="text" name="nama_mobil" value="{{ $mobil->nama_mobil }}">
        <button type="submit">Update</button>
    </form>
@endsection
