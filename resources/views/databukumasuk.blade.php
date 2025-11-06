<div class="content">
    <div class="container-xxl mt-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="mb-3">Data Buku Masuk</h2>
                <a href="/datamasuk/form" class="btn btn-primary mb-3">Tambah Data Masuk</a>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Judul Buku</th>
                                <th>Jumlah</th>
                                <th>Tanggal Masuk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                        @foreach($data as $d)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $d->judul }}</td>
                                <td>{{ $d->jumlah }}</td>
                                <td>{{ $d->tanggal_masuk }}</td>
                                <td>
                                    <a href="/datamasuk/form/{{ $d->id }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="/datamasuk/hapus/{{ $d->id }}"
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
