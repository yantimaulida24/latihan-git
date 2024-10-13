<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mobil</title>
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

        .form-section {
            padding: 20px;
            border: 1px solid #007acc; /* Border biru */
            border-radius: 8px;
            background-color: #ffffff;
            max-width: 600px;
            margin: 0 auto;
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

        .form-section button:hover {
            background-color: #007acc;
        }
    </style>
</head>

<body>
    <h1>Edit Mobil</h1>
    <div class="form-section">
        <form action="{{ route('mobil.update', $mobil->no_plat_mobil) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="no_plat_mobil" value="{{ $mobil->no_plat_mobil }}" required>
            <input type="text" name="nama_mobil" value="{{ $mobil->nama_mobil }}" required>
            <input type="text" name="jenis_mobil" value="{{ $mobil->jenis_mobil }}" required>
            <button type="submit">Update</button>
        </form>
    </div>
</body>

</html>