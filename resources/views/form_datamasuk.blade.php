<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Masuk Buku</title>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-4">
    <h3>{{ $data ? 'Edit Data Masuk Buku' : 'Tambah Data Masuk Buku' }}</h3>

    <form action="{{ $data ? url('/datamasuk/update') : url('/datamasuk/simpan') }}" method="POST">
        @csrf
        @if($data)
            <input type="hidden" name="id" value="{{ $data->id }}">
        @endif

        <div class="mb-3">
            <label>Buku</label>
            <select name="book_id" class="form-control" required>
                <option value="">-- Pilih Buku --</option>
                @foreach($books as $b)
                    <option value="{{ $b->id }}" 
                        {{ $data && $b->id == $data->book_id ? 'selected' : '' }}>
                        {{ $b->judul }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" class="form-control"
                value="{{ $data ? $data->jumlah : '' }}" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" class="form-control"
                value="{{ $data ? $data->tanggal_masuk : '' }}" required>
        </div>

        <div class="d-flex justify-content-between">
            <a href="/datamasuk" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">
                {{ $data ? 'Update' : 'Simpan' }}
            </button>
        </div>
    </form>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
