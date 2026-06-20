@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Edit Tugas</h2>

    <form action="/dosen/tugas/{{ $tugas->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Mata Kuliah</label>
            <input type="text"
                   name="nama_matkul"
                   class="form-control"
                   value="{{ $tugas->nama_matkul }}">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi_tugas"
                      class="form-control">{{ $tugas->deskripsi_tugas }}</textarea>
        </div>

        <div class="mb-3">
            <label>Deadline</label>
            <input type="date"
                   name="deadline"
                   class="form-control"
                   value="{{ $tugas->deadline }}">
        </div>

        <button type="submit" class="btn btn-success">
            Update Tugas
        </button>

        <a href="/dosen/tugas" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>
@endsection