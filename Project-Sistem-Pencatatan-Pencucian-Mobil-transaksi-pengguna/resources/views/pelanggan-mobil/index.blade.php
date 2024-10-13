<!-- resources/views/pelanggan-mobil/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Daftar Pelanggan dan Mobil</h1>

    <h2>Data Pelanggan</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>No Telepon</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pelanggan as $p)
                <tr>
                    <td>{{ $p->id_pelanggan }}</td>
                    <td>{{ $p->nama_pelanggan }}</td>
                    <td>{{ $p->no_telepon }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Data Mobil</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID Mobil</th>
                <th>Jenis Mobil</th>
                <th>Nama Mobil</th>
                <th>No Plat Mobil</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mobil as $m)
                <tr>
                    <td>{{ $m->id_mobil }}</td>
                    <td>{{ $m->jenis_mobil }}</td>
                    <td>{{ $m->nama_mobil }}</td>
                    <td>{{ $m->no_plat_mobil }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
