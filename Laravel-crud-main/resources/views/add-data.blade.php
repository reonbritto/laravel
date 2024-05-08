@extends('layouts.admin')

@section('title', 'Tambah Data Pegawai')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Employee Data</a></li>
                            <li class="breadcrumb-item active">Add Employee Data</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <form action="/create" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="nama"
                                        class="form-control @error('nama') is-invalid @enderror"
                                        placeholder="">
                                    @error('nama')
                                        <div class="text-red danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" name="tanggal_lahir" class="form-control">
                                    @error('tanggal_lahir')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row g-3 align-items-center my-3">
                                    <div class="col-auto">
                                        <label class="form-label">Gender</label>
                                        <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                                            <option selected>select Gender</option>
                                            <option value="Pria">Male</option>
                                            <option value="Wanita">Female</option>
                                        </select>
                                    </div>

                                    <div class="col-auto mx-5">
                                        <label class="form-label">Project</label>
                                        <select class="form-select" name="id_religions" aria-label="Default select example">
                                            <option selected>Select Project</option>
                                            @foreach ($dataagama as $data)
                                                <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Phone No.</label>
                                    <input type="number" name="notelpon"
                                        class="form-control @error('notelpon') is-invalid @enderror"
                                        placeholder="">
                                    @error('notelpon')
                                        <div class="text-red danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Insert photo</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
                    </script>
                    -->
@endsection