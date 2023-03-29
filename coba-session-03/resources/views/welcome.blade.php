<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"> --}}
    {{-- </script> --}}
    {{-- <link rel="stylesheet" href="../css/profile.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    @vite(['resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-modify">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Hobbies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <p class="txt-section"> Profile Section</p>

            </div>
        </div>
        <div class="row">
            <div class="col-4 text-center">
                <img style="width: 300px; height:300px"
                    src="https://o-cdn-cas.sirclocdn.com/parenting/images/329238083_115135261364893_6822709.width-800.format-webp.webp">
            </div>
            <div class="col-8">
                <p class="txt-profile">
                    Hanni, was born in 6 Oktober 2004 and a member of NewJeans who has Vietnamese origins, is facing
                    heavy criticism from her home
                    country. On February 5th, information regarding the family of NewJeans Hanni, who comes from
                    Vietnam, started to gain attention on social media platforms.

                </p>
            </div>

        </div>
    </div>

</body>

</html>
