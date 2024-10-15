@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Pelanggan</h2>

    <!-- Menggunakan id_pelanggan di route dan menambahkan method PUT -->
    <form action="{{ route('pelanggan.update', $pelanggan->id_pelanggan) }}" method="POST">
        @csrf
        @method('PUT') <!-- Menentukan metode PUT untuk update data -->

        <div class="form-group">
            <label for="nama">Nama Pelanggan</label>
            <input type="text" name="nama" class="form-control" value="{{ $pelanggan->nama }}" required>
        </div>

        <div class="form-group">
            <label for="no_hp">No. Telepon</label>
            <input type="text" name="no_hp" class="form-control" value="{{ $pelanggan->no_hp }}" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection