@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Dashboard Admin</h2>
    <hr>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-bg-primary">
                <div class="card-body">
                    <h5>Total Mahasiswa</h5>
                    <h3>{{ $jumlahMahasiswa ?? 0 }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-bg-success">
                <div class="card-body">
                    <h5>Total Dosen</h5>
                    <h3>{{ $jumlahDosen ?? 0 }}</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-bg-warning">
                <div class="card-body">
                    <h5>Total Tugas</h5>
                    <h3>{{ $jumlahTugas ?? 0 }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection