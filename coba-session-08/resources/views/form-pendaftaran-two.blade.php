<?php
dump($errors);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Pendaftaran Mahasiswa</h1>
                <hr>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form action="{{ route('mahasiswas.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim"
                            value="{{ old('nim') }}">

                        {{-- CRUD --}}
                        @error('nim')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ old('nama') }}">
                        {{-- CRUD --}}
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="{{ old('email') }}">
                        {{-- CRUD --}}
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-label" type="radio" name="jenis_kelamin" id="laki_laki"
                                value="L" {{ old('jenis_kelamin') == 'L' ? 'checked' : '' }}>
                            <label class="form-check-label" for="laki_laki">Laki Laki</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-label" type="radio" name="jenis_kelamin" id="perempuan"
                                value="P" {{ old('jenis_kelamin') == 'P' ? 'checked' : '' }}>
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>

                        {{-- CRUD --}}
                        @error('jenis_kelamin')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan">
                            <option value="Teknik Informatika"
                                {{ old('jurusan') == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika
                            </option>

                            <option value="Sistem Informasi"
                                {{ old('jurusan') == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>

                            <option value="Ilmu Komputer" {{ old('jurusan') == 'Ilmu Komputer' ? 'selected' : '' }}>Ilmu
                                Komputer</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3">{{ old('alamat') }}
                        </textarea>
                        <button type="submit" class="btn btn-primary mb-2">Daftar</button>
                    </div>

                </form>


            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>


</html>
