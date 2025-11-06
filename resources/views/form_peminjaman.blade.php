<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $data ? 'Edit Peminjaman' : 'Tambah Peminjaman' }}</title>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">
    <h3>{{ $data ? 'Edit Peminjaman' : 'Tambah Peminjaman' }}</h3>

    <form action="{{ $data ? url('/peminjaman/update') : url('/peminjaman/simpan') }}" method="POST">
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
            <label>User</label>
            <select name="user_id" class="form-control" required>
                <option value="">-- Pilih User --</option>
                @foreach($users as $u)
                    <option value="{{ $u->id }}" 
                        {{ $data && $u->id == $data->user_id ? 'selected' : '' }}>
                        {{ $u->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="d-flex justify-content-between">
            <a href="/peminjaman" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">
                {{ $data ? 'Update' : 'Simpan' }}
            </button>
        </div>
    </form>
</div>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
