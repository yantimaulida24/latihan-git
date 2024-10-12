@extends('layouts.app')

@section('content')
<div class="page-title d-flex justify-content-between mb-3">
    <h3>Transaksi</h3>
    <a href="{{ route('transaksi.create') }}" class="btn btn-primary align-self-center">Tambah</a>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Plat Mobil</th>
                    <th>Metode Pembayaran</th>
                    <th>Total Pembayaran</th>
                    <th>Tanggal Transaksi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($transaksi as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->no_plat_mobil }}</td>
                    <td>{{ $item->metode_pembayaran }}</td>
                    <td>{{ number_format($item->total_pembayaran, 2, ',', '.') }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->tanggal_transaksi)->format('d-m-Y') }}</td> <!-- Format tanggal -->
                    <td>{{ ucfirst($item->status) }}</td>
                    <td>
                        <div class="d-flex flex-column">
                            <a href="{{ route('transaksi.edit', ['transaksi' => $item->id_transaksi]) }}" class="btn btn-warning btn-sm mb-2">Edit</a>
                            <form action="{{ route('transaksi.destroy', ['transaksi' => $item->id_transaksi]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak ada data transaksi.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
