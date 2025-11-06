<div class="container mt-4">
    <h3>Data User</h3>
    <a href="/datauser/form" class="btn btn-primary mb-3">+ Tambah User</a>

    <table class="table table-bordered align-middle">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $u)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $u->name }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->nama_level ?? '-' }}</td>
                <td>
                    <a href="{{ route('user.edit', $u->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <a href="/datauser/delete/{{ $u->id }}" class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin mau hapus user ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
