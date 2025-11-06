<div class="container mt-4">
    <h3 class="mb-3">Laporan Peminjaman Buku</h3>

    <form method="GET" action="{{ url('/laporanpeminjaman') }}" class="row g-3 align-items-end mb-4">
        <div class="col-md-3">
            <label for="from" class="form-label">Dari Tanggal</label>
            <input type="date" id="from" name="from" class="form-control" value="{{ request('from') }}">
        </div>
        <div class="col-md-3">
            <label for="to" class="form-label">Sampai Tanggal</label>
            <input type="date" id="to" name="to" class="form-control" value="{{ request('to') }}">
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-primary w-100">Filter</button>
        </div>
        <div class="col-md-3 text-end">
            <a href="{{ url('/laporanpeminjaman') }}" class="btn btn-secondary w-100">Reset</a>
        </div>
    </form>

    <div class="mb-3">
        <a href="{{ url('/laporanpeminjaman/print') }}?from={{ request('from') }}&to={{ request('to') }}" target="_blank" class="btn btn-outline-secondary">Print</a>
        <a href="{{ url('/laporanpeminjaman/pdf') }}?from={{ request('from') }}&to={{ request('to') }}" class="btn btn-outline-danger">PDF</a>
        <a href="{{ url('/laporanpeminjaman/excel') }}?from={{ request('from') }}&to={{ request('to') }}" class="btn btn-outline-success">Excel</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Judul Buku</th>
                    <th>Kategori</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($laporan as $l)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $l->nama_peminjam }}</td>
                        <td>{{ $l->judul_buku }}</td>
                        <td>{{ $l->kategori ?? '-' }}</td>
                        <td>{{ $l->tanggal_pinjam }}</td>
                        <td>{{ $l->tanggal_kembali ?? '-' }}</td>
                        <td>
                            @if($l->status == 'Dipinjam')
                                <span class="badge bg-warning text-dark">{{ $l->status }}</span>
                            @elseif($l->status == 'Dikembalikan')
                                <span class="badge bg-success">{{ $l->status }}</span>
                            @else
                                <span class="badge bg-secondary">{{ $l->status }}</span>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">Tidak ada data peminjaman ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
