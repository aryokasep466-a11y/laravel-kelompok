@extends('layouts.app')

@section('content')
<div class="container">

    <h2 class="mb-4">Kelola Tugas</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form Tambah Tugas -->
    <div class="card mb-4">
        <div class="card-header">
            Tambah Tugas Baru
        </div>

        <div class="card-body">
            <form action="/dosen/tugas" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Judul Tugas</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="4" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deadline</label>
                    <input type="date" name="deadline" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">
                    Simpan Tugas
                </button>
            </form>
        </div>
    </div>

    <!-- Daftar Tugas -->
    <div class="card">
        <div class="card-header">
            Daftar Tugas
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Deadline</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

               <tbody>
@foreach($tugas as $item)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $item->nama_matkul }}</td>
    <td>{{ $item->deskripsi_tugas }}</td>
    <td>{{ $item->deadline }}</td>

    <td>
        <a href="/dosen/tugas/{{ $item->id }}/edit"
           class="btn btn-warning btn-sm">
           Edit
        </a>

        <form action="/dosen/tugas/{{ $item->id }}"
              method="POST"
              style="display:inline">

            @csrf
            @method('DELETE')

            <button class="btn btn-danger btn-sm"
                    onclick="return confirm('Hapus tugas?')">
                Hapus
            </button>

        </form>
    </td>
</tr>
@endforeach
</tbody>

            </table>
        </div>
    </div>

</div>
@endsection