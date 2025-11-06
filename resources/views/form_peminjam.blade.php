{{-- resources/views/form_peminjam.blade.php --}}

<div class="container">
    <h2>Lengkapi Data Peminjam</h2>

    @if(session('info'))
        <div class="alert alert-info">{{ session('info') }}</div>
    @endif

    <form action="{{ route('peminjam.store', ['user_id' => $user->id]) }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nama User (readonly)</label>
            <input type="text" value="{{ $user->name }}" class="form-control" readonly>
        </div>

        <div class="form-group">
            <label>Alamat (opsional)</label>
            <textarea name="alamat" class="form-control" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label>No HP (opsional)</label>
            <input type="text" name="no_hp" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        <a href="/datauser" class="btn btn-secondary mt-3">Batal</a>
    </form>
</div>
