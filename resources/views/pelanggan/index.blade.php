@extends('layouts.app')

@section('content')
<div class="page-title mb-3">
    <h3>Pelanggan</h3>
</div>
<div class="card">
    <div class="card-body">
        <a href="{{ url( 'pelanggan/create') }}" class="btn btn-primary mb-3">Tambah</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>No. Telepon</th>
                    <th>Nomor Plat Mobil</th>
                    <th>Nama Mobil</th>
                    <th>Jenis Mobil</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pelanggan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>{{ $item->no_plat_mobil}}</td>
                    <td>{{ $item->nama_mobil }}</td>
                    <td>{{ $item->jenis_mobil }}</td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ url('pelanggan.destroy', $item->id_pelanggan) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data pelanggan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection