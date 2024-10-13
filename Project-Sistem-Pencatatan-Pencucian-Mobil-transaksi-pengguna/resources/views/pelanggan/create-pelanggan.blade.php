<!-- resources/view/create-pelanggan.blade.php -->

<h1>Create Pelanggan</h1>

<form action="{{ route('pelanggan.store') }}" method="post">
    @csrf

    <label for="nama_pelanggan">Nama Pelanggan:</label>
    <input type="text" name="nama_pelanggan">

    <br>

    <label for="no_telepon">No Telepon:</label>
    <input type="text" name="no_telepon">

    <br>

    <button type="submit">Create</button>
</form>