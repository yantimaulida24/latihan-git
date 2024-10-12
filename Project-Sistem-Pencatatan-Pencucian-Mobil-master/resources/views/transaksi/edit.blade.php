@extends('layouts.app')

@section('content')

<div class="page-title mb-3">
    <h3>Edit Transaksi</h3>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('transaksi.update', ['transaksi' => $transaksi->id_transaksi]) }}" method="POST" id="updateForm">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="id_transaksi" class="form-label">ID Transaksi</label>
                <input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="{{ $transaksi->id_transaksi }}" required readonly>
            </div>

            <div class="mb-3">
                <label for="id_pelanggan" class="form-label">ID Pelanggan</label>
                <input type="number" class="form-control @error('id_pelanggan') is-invalid @enderror" id="id_pelanggan" name="id_pelanggan" value="{{ old('id_pelanggan', $transaksi->id_pelanggan) }}" required>
                @error('id_pelanggan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="no_plat_mobil" class="form-label">No Plat Mobil</label>
                <input type="text" class="form-control @error('no_plat_mobil') is-invalid @enderror" id="no_plat_mobil" name="no_plat_mobil" value="{{ old('no_plat_mobil', $transaksi->no_plat_mobil) }}" required>
                @error('no_plat_mobil')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="metode_pembayaran" class="form-label">Metode Pembayaran</label>
                <input type="text" class="form-control @error('metode_pembayaran') is-invalid @enderror" id="metode_pembayaran" name="metode_pembayaran" value="{{ old('metode_pembayaran', $transaksi->metode_pembayaran) }}" required>
                @error('metode_pembayaran')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="total_pembayaran" class="form-label">Total Pembayaran</label>
                <input type="number" class="form-control @error('total_pembayaran') is-invalid @enderror" id="total_pembayaran" name="total_pembayaran" value="{{ old('total_pembayaran', $transaksi->total_pembayaran) }}" required>
                @error('total_pembayaran')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{ old('status', $transaksi->status) }}" required>
                @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between mt-4">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

    </div>
</div>

@endsection