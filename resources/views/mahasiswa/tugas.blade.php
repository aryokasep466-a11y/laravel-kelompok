@extends('layouts.app')

@section('content')
<div class="container py-4">

    <h2 class="mb-4">📂 Tugas Saya</h2>

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            Daftar Tugas
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Mata Kuliah</th>
                        <th>Deskripsi Tugas</th>
                        <th>Deadline</th>
                        <th>Upload Jawaban</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($tugas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            {{ $item->nama_matkul }}
                        </td>

                        <td>
                            {{ $item->deskripsi_tugas }}
                        </td>

                        <td>
                            {{ $item->deadline }}
                        </td>

                        <td>
                            <form action="{{ route('mahasiswa.uploadTugas') }}"
                                  method="POST"
                                  enctype="multipart/form-data">

                                @csrf

                                <input type="hidden"
                                       name="tugas_id"
                                       value="{{ $item->id }}">

                                <input type="file"
                                       name="file"
                                       class="form-control mb-2"
                                       required>

                                <button type="submit"
                                        class="btn btn-success btn-sm">
                                    Upload
                                </button>

                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">
                            Belum ada tugas dari dosen
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>
@endsection