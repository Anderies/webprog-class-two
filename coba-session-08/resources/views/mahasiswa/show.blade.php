<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container my-4">
        <!-- Add a button at the top of the page -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('mahasiswas.index') }}" class="btn btn-primary mx-2">Back to List</a>
            <a href="/mahasiswas/{{$mahasiswa->id}}/edit" class="btn btn-success mx-2">Edit</a>
            <form action="/mahasiswas/{{$mahasiswa->id}}/delete" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
        <!-- Display student details using Bootstrap's table component -->
        <table class="table table-bordered">
            <tr>
                <th>NIM</th>
                <td>{{ $mahasiswa->nim }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $mahasiswa->nama }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>johndoe@example.com</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>Male</td>
            </tr>
            <tr>
                <th>Major</th>
                <td>Computer Science</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>Jakarta, Indonesia</td>
            </tr>
        </table>
    </div>
    <!-- Include the Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.bundle.min.js"
        integrity="sha512-F4Y59Jh/xzoy2C+LsFz8sLlImZvOkA9XpznIZGgmfYJ1HHyfyWhnoaH+iqK1vgC+8DZa/NUXN+MXK0MSep+4NQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
