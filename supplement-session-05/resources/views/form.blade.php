<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <form method="POST" action="{{ route('generate-image') }}">
            @csrf
            <div>
                <label for="name">Generate Image</label>
                <input class="form-control" type="text" id="name" name="nameTwo" required>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
        <div class="row">
            <div class="col">
                {{-- Hasil : {{ $res }} --}}

                @if (!empty($res))
                    <ul>
                        @foreach ($res as $result)
                            <img src="{{ $result['url'] }}">
                        @endforeach
                    </ul>
                @else
                    <p>No users found.</p>
                @endif
                @if ($res)
                @endif

            </div>
        </div>
    </div>


</body>

</html>
