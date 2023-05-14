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
                <div class="py-4">
                    <h2>Tabel Mahasiswa</h2>
                    <a href="/mahasiswas/create" class="btn btn-success">Create</a>
                </div>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswas as $mahasiswa)
                            <tr style="cursor:pointer;"
                                onclick="window.location='{{ route('mahasiswas.show', $mahasiswa->id) }}';">
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->nama }}</td>
                                <td>{{ $mahasiswa->jenis_kelamin }}</td>
                                <td>{{ $mahasiswa->jurusan }}</td>
                                <td>{{ $mahasiswa->alamat == '' ? 'N/A' : $mahasiswa->alamat }}</td>
                            </tr>
                        @empty
                            <td colspan="6" class="text-center">Tidak ada data...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>
