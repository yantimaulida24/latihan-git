@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Daftar Mobil</h1>

    <!-- Tombol tambah mobil baru -->
    <a href="{{ route('mobil.create') }}" class="btn btn-primary mb-3">Tambah Mobil</a>

    <!-- Cek jika ada data mobil -->
    @if($mobils->isEmpty())
        <div class="alert alert-warning">
            Tidak ada mobil yang terdaftar.
        </div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mobil</th>
                    <th>Jenis Mobil</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mobils as $mobil)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mobil->nama }}</td>
                        <td>{{ $mobil->jenis }}</td>
                        <td>{{ number_format($mobil->harga, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('mobil.edit', $mobil->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('mobil.destroy', $mobil->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
