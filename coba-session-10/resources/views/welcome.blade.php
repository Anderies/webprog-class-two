<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <p>{{ __('form.judul')}}</p>
        <input type="text">
        <hr>
        <p>{{ __('form.input.nim')}}</p>
        <input type="number">
        <hr>
        <p>{{ __('form.jurusan')}}</p>
        <input type="text">
        <hr>
    </body>
</html>
