<div class="container mt-4">
    <h3>Laporan Buku Masuk</h3>
    <div class="mb-3">
        <a href="{{ url('/laporanmasuk/print') }}" target="_blank" class="btn btn-outline-secondary">🖨 Print</a>
        <a href="{{ url('/laporanmasuk/pdf') }}" class="btn btn-outline-danger">📄 PDF</a>
        <a href="{{ url('/laporanmasuk/excel') }}" class="btn btn-outline-success">📊 Excel</a>
    </div>


    <table class="table table-bordered align-middle">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tanggal Masuk</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporan as $l)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $l->judul }}</td>
                <td>{{ $l->nama_penulis }}</td>
                <td>{{ $l->tanggal_masuk }}</td>
                <td>{{ $l->jumlah }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
