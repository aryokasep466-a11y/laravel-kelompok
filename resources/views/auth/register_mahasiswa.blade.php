@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card">

                <div class="card-header">
                    Register Mahasiswa
                </div>

                <div class="card-body">

                    <form method="POST" action="/register-mahasiswa">

                        @csrf

                        <div class="mb-3">
                            <label>NIM</label>
                            <input type="text"
                                   name="nim"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Prodi</label>
                            <input type="text"
                                   name="prodi"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Semester</label>
                            <input type="number"
                                   name="semester"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   required>
                        </div>

                        <button type="submit"
                                class="btn btn-primary">
                            Daftar
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection