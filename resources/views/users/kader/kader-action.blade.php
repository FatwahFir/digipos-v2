<div class="modal-content">
    <form id="formAction" action="{{ $user->id ? route('kader.update', $user->id):route('kader.store') }}" method="POST">
        @csrf
        @if ($user->id)
            @method('put')
        @endif
    <div class="modal-header">
        <h5 class="modal-title" id="largeModalLabel">{{ $user->id ? 'Edit': 'Tambah' }} User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"
            aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" placeholder="Nama.." value="{{ $user->id ? $user->kader->nama : '' }}" name="name" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" placeholder="username.." value="{{ $user->username }}" name="username" class="form-control" id="username">
        </div>
        {{-- <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" placeholder="Password here.." value="{{ $user->password }}" name="password" class="form-control" id="password">
        </div> --}}
        <div class="mb-3">
            <label for="posyandu_id">Pusyandu</label>
            <select id="posyandu_id" name="posyandu_id" class="form-control form-select">
                @foreach ($posyandu as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_posyandu }}</option>
                @endforeach
            </select>
        </div>
        
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary"
            data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">{{ $user->id ? 'Simpan Perubahan': 'Simpan' }}</button>
    </div>
    </form>
</div>