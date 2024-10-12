<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mobil</title>
</head>
<body>
    <h1>Tambah Mobil</h1>
    <form action="{{ route('mobil.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama_mobil">Nama Mobil:</label>
            <input type="text" id="nama_mobil" name="nama_mobil" required>
        </div>
        <div>
            <label for="jenis_mobil">Jenis Mobil:</label>
            <input type="text" id="jenis_mobil" name="jenis_mobil" required>
        </div>
        <div>
            <label for="no_plat">No Plat:</label>
            <input type="text" id="no_plat" name="no_plat" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
    <a href="{{ route('mobil.index') }}">Kembali</a>
</body>
</html>
