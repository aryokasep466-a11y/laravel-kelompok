@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">
                📋 Kelola Absensi Mahasiswa
            </h3>
        </div>

        <div class="card-body">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ url('/dosen/absensi') }}" method="POST">
                @csrf

                <div class="table-responsive">

                    <table class="table table-striped table-hover align-middle">

                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama Mahasiswa</th>
                                <th>Status Kehadiran</th>
                            </tr>
                        </thead>

                        <tbody>

                        @foreach($mahasiswa as $index => $mhs)

                            <tr>
                                <td>{{ $index + 1 }}</td>

                                <td>
                                    <span class="badge bg-secondary">
                                        {{ $mhs->nim }}
                                    </span>
                                </td>

                                <td>{{ $mhs->nama }}</td>

                                <td>
                                    <select
                                        name="status[{{ $mhs->id }}]"
                                        class="form-select">

                                        <option value="Hadir">✅ Hadir</option>
                                        <option value="Izin">🟡 Izin</option>
                                        <option value="Sakit">🔵 Sakit</option>
                                        <option value="Alpa">🔴 Alpa</option>

                                    </select>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>

                    </table>

                </div>

                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-primary btn-lg">
                        💾 Simpan Absensi
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection