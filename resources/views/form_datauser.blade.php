<form action="{{ route('user.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    Nama:
    <input type="text" name="name" value="{{ $user->name }}" class="form-control">

    Email:
    <input type="email" name="email" value="{{ $user->email }}" class="form-control">

    Level:
    <select name="level" class="form-control">
        <option value="1" {{ $user->level_id==1?'selected':'' }}>Level 1</option>
        <option value="2" {{ $user->level_id==2?'selected':'' }}>Level 2</option>
        <option value="3" {{ $user->level_id==3?'selected':'' }}>Level 3</option>
    </select>

    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
</form>
