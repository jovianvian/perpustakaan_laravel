<div class="content">
    <div class="container-xxl mt-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="mb-3">Daftar Buku</h2>
                <a href="/databuku/form" class="btn btn-primary mb-3">Tambah Buku</a>
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun</th>
                            <th>Stok</th>
                            <th>Kategori</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($buku as $b)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $b->judul }}</td>
                                <td>{{ $b->nama_penulis }}</td>
                                <td>{{ $b->nama_penerbit }}</td>
                                <td>{{ $b->tahun }}</td>
                                <td>{{ $b->stok }}</td>
                                <td>{{ $b->nama_kategori }}</td>
                                <td>
                                    @if($b->foto)
                                        <img src="{{ asset('storage/'.$b->foto) }}" width="80" class="img-thumbnail">
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="/databuku/form/{{ $b->id }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="/databuku/delete/{{ $b->id }}" class="btn btn-sm btn-danger"
                                       onclick="return confirm('Yakin mau hapus buku ini?')">Hapus</a>
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
