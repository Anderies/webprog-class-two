<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Users</title>
    </head>
    <body>
        <div>
            {{-- @dd($data[0]->phone) --}}
            <h1>Hello World!</h1>
            @foreach ($data as $user)
                <h1>{{$user->name}}</h1>
                <h1>{{$user->phone->phone}}</h1>
            @endforeach
        </div>
    </body>

</html>
