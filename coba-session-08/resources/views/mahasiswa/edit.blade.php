<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <h1>Edit Mahasiswa</h1>
                <form method="POST" action="/mahasiswas/{{ $mahasiswa->id }}">
                    @method('PUT')

                    @csrf
                    <div class="form-group">
                        <label for="">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim"
                            value="{{ old('nim') ?? $mahasiswa->nim }}">

                        {{-- CRUD --}}
                        @error('nim')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ old('nama') ?? $mahasiswa->nama }}">
                        {{-- CRUD --}}
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="{{ old('email') ?? $mahasiswa->email}}">
                        {{-- CRUD --}}
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-label" type="radio" name="jenis_kelamin" id="laki_laki"
                                value="L" {{ old('jenis_kelamin')  ?? $mahasiswa->jenis_kelamin == 'L' ? 'checked' : ''  }}>
                            <label class="form-check-label" for="laki_laki">Laki Laki</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-label" type="radio" name="jenis_kelamin" id="perempuan"
                                value="P" {{ old('jenis_kelamin') ?? $mahasiswa->jenis_kelamin == 'P' ? 'checked' : '' }}>
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
                                {{ old('jurusan') ?? $mahasiswa->jurusan == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika
                            </option>

                            <option value="Sistem Informasi" {{ old('jurusan') ?? $mahasiswa->jurusan == 'Sistem Informasi' ? 'selected' : '' }}>
                                Sistem Informasi</option>

                            <option value="Ilmu Komputer" {{ old('jurusan') ?? $mahasiswa->jurusan == 'Ilmu Komputer' ? 'selected' : '' }}>Ilmu
                                Komputer</option>
                        </select>
                    </div>

                    <div class="form-group ">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3">{{ old('alamat') ?? $mahasiswa->alamat }}
                        </textarea>
                        <button type="submit" class="btn btn-primary mt-3 mb-2">Submit</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</body>

</html>
