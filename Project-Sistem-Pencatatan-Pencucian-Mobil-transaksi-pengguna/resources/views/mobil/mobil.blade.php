<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mobil</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f8ff; /* Warna latar biru muda */
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #007acc; /* Warna teks biru */
            margin-bottom: 20px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .table-section, .form-section {
            flex: 1;
            padding: 20px;
            border: 1px solid #007acc; /* Border biru */
            border-radius: 8px;
            background-color: #ffffff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007acc; /* Warna header tabel biru */
            color: white;
        }

        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            transition: background-color 0.3s ease, transform 0.2s;
            text-decoration: none;
        }

        .btn-edit {
            background-color: #4da6ff; /* Warna biru untuk tombol edit */
        }

        .btn-delete {
            background-color: #ff4d4d; /* Warna merah untuk tombol hapus */
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .form-section input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-section button {
            background-color: #4da6ff; /* Warna tombol biru */
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>

<body>
    <h1>Daftar Mobil</h1>
    <div class="container">
        <div class="table-section">
            <h2>List Mobil</h2>
            <table>
                <thead>
                    <tr>
                        <th>No Plat Mobil</th>
                        <th>Nama Mobil</th>
                        <th>Jenis Mobil</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mobils as $mobil)
                    <tr>
                        <td>{{ $mobil->no_plat_mobil }}</td>
                        <td>{{ $mobil->nama_mobil }}</td>
                        <td>{{ $mobil->jenis_mobil }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('mobil.edit', $mobil->no_plat_mobil) }}" class="btn btn-edit">Edit</a>
                                <form action="{{ route('mobil.destroy', $mobil->no_plat_mobil) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="form-section">
            <h2>Tambah Mobil</h2>
            <form action="{{ route('mobil.store') }}" method="POST">
                @csrf
                <input type="text" name="no_plat_mobil" placeholder="No Plat Mobil" required>
                <input type="text" name="nama_mobil" placeholder="Nama Mobil" required>
                <input type="text" name="jenis_mobil" placeholder="Jenis Mobil" required>
                <button type="submit">Simpan</button>
            </form>
        </div>
    </div>
</body>

</html>