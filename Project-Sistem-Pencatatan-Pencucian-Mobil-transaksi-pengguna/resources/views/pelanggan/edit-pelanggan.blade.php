<!-- resources/view/edit-pelanggan.blade.php -->

<h1>Edit Pelanggan</h1>

<form action="{{ route('pelanggan.update', $pelanggan->id_pelanggan) }}" method="post">
    @csrf
    @method('PUT')

    <label for="nama_pelanggan">Nama Pelanggan:</label>
    <input type="text" name="nama_pelanggan" value="{{ $pelanggan->nama_pelanggan }}">

    <br>

    <label for="no_telepon">No Telepon:</label>
    <input type="text" name="no_telepon" value="{{ $pelanggan->no_telepon }}">

    <br>

    <button type="submit">Update</button>
</form>