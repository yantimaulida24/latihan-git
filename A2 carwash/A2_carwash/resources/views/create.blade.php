@extends('layout')

@section('content')
    <h1>Tambah Mobil Baru</h1>

    <form action="{{ route('mobil.store') }}" method="POST">
        @csrf
        <label>Jenis Mobil:</label>
        <input type="text" name="jenis_mobil">
        <label>No Plat Mobil:</label>
        <input type="text" name="no_plat_mobil">
        <label>Nama Mobil:</label>
        <input type="text" name="nama_mobil">
        <button type="submit">Simpan</button>
    </form>
@endsection
