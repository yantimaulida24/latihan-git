@extends('layout')

@section('content')
    <h1>Daftar Mobil</h1>
    <a href="{{ route('mobil.create') }}">Tambah Mobil</a>
    <table>
        <thead>
            <tr>
                <th>Jenis Mobil</th>
                <th>No Plat Mobil</th>
                <th>Nama Mobil</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mobils as $mobil)
                <tr>
                    <td>{{ $mobil->jenis_mobil }}</td>
                    <td>{{ $mobil->no_plat_mobil }}</td>
                    <td>{{ $mobil->nama_mobil }}</td>
                    <td>
                        <a href="{{ route('mobil.show', $mobil->id) }}">Lihat</a>
                        <a href="{{ route('mobil.edit', $mobil->id) }}">Edit</a>
                        <form action="{{ route('mobil.destroy', $mobil->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
