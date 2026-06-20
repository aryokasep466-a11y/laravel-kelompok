@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Daftar Pengumpulan Tugas</h2>

    <table class="table table-bordered">
        <thead>
<tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama Mahasiswa</th>
    <th>Tugas</th>
    <th>File</th>
</tr>
</thead>

<tbody>
@foreach($pengumpulan as $item)
<tr>

    <td>{{ $loop->iteration }}</td>

   <td>{{ optional($item->mahasiswa)->nim ?? '-' }}</td>

    <td>{{ optional($item->mahasiswa)->nama ?? '-' }}</td>

    <td>{{ $item->tugas->nama_matkul }}</td>

    <td>
        <a href="{{ asset('storage/'.$item->file_path) }}"
           target="_blank"
           class="btn btn-primary btn-sm">
           Lihat File
        </a>
    </td>

</tr>
@endforeach
</tbody>
    </table>

</div>
@endsection