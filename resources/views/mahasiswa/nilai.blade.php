@extends('layouts.app')

@section('content')
<div class="container py-4">

    <h2 class="mb-4">📊 Nilai Saya</h2>

    <div class="card shadow">

        <div class="card-header bg-success text-white">
            Daftar Nilai
        </div>

        <div class="card-body">

            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th>Mata Kuliah</th>
                        <th>Tugas</th>
                        <th>UTS</th>
                        <th>UAS</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Pemrograman Web</td>
                        <td>90</td>
                        <td>85</td>
                        <td>88</td>
                        <td>A</td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>

</div>
@endsection