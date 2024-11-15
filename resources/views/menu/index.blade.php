@extends('kerangka')
@section('content')
<div class="container mt-4">
    <h3>Daftar Menu</h3>

    <!-- Tombol Tambah Menu -->
    <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahMenuModal">Tambah Menu</button>

    <!-- Modal Tambah Menu -->
    <div class="modal fade" id="tambahMenuModal" tabindex="-1" aria-labelledby="tambahMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahMenuModalLabel">Tambah Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('menu.store') }}" method="POST">
                        @csrf

                        <!-- Input Single Entry -->
                        <h6>Tambah Menu Single</h6>
                        <div class="mb-3">
                            <label class="form-label">Nama Menu</label>
                            <input type="text" class="form-control" name="menu" placeholder="Nama Menu">
                        </div>
                        <div class="modal-footer mt-3">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk menambah input multiple menu -->
<script>
    document.getElementById('addMoreMenu').addEventListener('click', function() {
        const container = document.getElementById('multipleMenuContainer');
        const index = container.children.length / 2; // Menghitung index untuk input baru
        const newEntry = `
            <div class="mb-3">
                <label class="form-label">Nama Menu</label>
                <input type="text" class="form-control" name="menu[${index}][nama_menu]" placeholder="Nama Menu">
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="menu[${index}][deskripsi]" placeholder="Deskripsi Menu"></textarea>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', newEntry);
    });
</script>
@endsection
