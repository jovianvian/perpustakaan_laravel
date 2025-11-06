<div class="content">
    <div class="container-xxl mt-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="mb-3">Data Buku Dipinjam</h2>
                <a href="/peminjaman/form" class="btn btn-primary mb-3">Tambah Peminjaman</a>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Judul Buku</th>
                                <th>Nama User</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($data as $d)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $d->judul }}</td>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->tanggal_pinjam }}</td>
                                <td>{{ $d->tanggal_kembali ?? '-' }}</td>
                                <td>{{ ucfirst($d->status) }}</td>
                                <td>
                                    <a href="/peminjaman/form/{{ $d->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/peminjaman/hapus/{{ $d->id }}"
                                       class="btn btn-danger btn-sm"
                                       onclick="return confirm('Yakin mau hapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
