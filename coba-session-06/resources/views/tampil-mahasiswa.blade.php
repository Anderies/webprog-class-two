<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.scss') }}" rel="stylesheet">
</head>

<body>
    @forelse ($mahasiswas as $mhs)
        <li class="list-group-item">
            {{ $mhs->nama }} ({{ $mhs->nim }}),
            Tanggal Lahir: {{ $mhs->tanggal_lahir }},
            IPK: {{ $mhs->ipk }}
        </li>
    @empty
        <div class="alert alert-dark d-inline-block">
            Tidak ada data....
        </div>
    @endforelse

</body>

</html>
