<!-- resources/view/pelanggan.blade.php -->

<h1>Informasi Pelanggan</h1>

<table>
    <tr>
        <th>ID Pelanggan</th>
        <th>Nama Pelanggan</th>
        <th>No Telepon</th>
        <th>Action</th>
    </tr>
    @foreach($pelanggans as $pelanggan)
    <tr>
        <td>{{ $pelanggan->id_pelanggan }}</td>
        <td>{{ $pelanggan->nama_pelanggan }}</td>
        <td>{{ $pelanggan->no_telepon }}</td>
        <td>
            <a href="{{ route('pelanggan.edit', $pelanggan->id_pelanggan) }}">Edit</a>
            <form action="{{ route('pelanggan.destroy', $pelanggan->id_pelanggan) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<a href="{{ route('pelanggan.create') }}">Create New Pelanggan</a>