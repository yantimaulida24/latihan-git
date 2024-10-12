@extends('layout')

@section('content')
    <h1>Detail Mobil</h1>
    <p>Jenis Mobil: {{ $mobil->jenis_mobil }}</p>
    <p>No Plat Mobil: {{ $mobil->no_plat_mobil }}</p>
    <p>Nama Mobil: {{ $mobil->nama_mobil }}</p>
    <a href="{{ route('mobil.index') }}">Kembali</a>
@endsection
