<!DOCTYPE html>
<html>

<head>
    <title>@yield('judul')</title>

</head>

<body>

    <header>

        <h2>Blogger</h2>

        @include('layout.nav')

    </header>
    <hr />
    <br />
    <br />

    <!-- bagian judul halaman blog -->
    <h3> @yield('judul') </h3>


    <!-- bagian konten blog -->
    <h1>Try to add some yield directive here</h1>


    <br />
    <br />
    <hr />

    {{-- Challenge Add Bootsrap Icon From Previous Session 03 for Footer --}}

</body>

</html>
