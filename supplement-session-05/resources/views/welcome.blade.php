<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5 ">
            <div class="col-6">
                <form class="mb-3" method="POST" action="{{ route('submit') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Enter Text: </label>
                        <input class="form-control" id="name" name="name">
                    </div>
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>
                @if ($resMsg !== null)
                    Text : {{ $resMsg }}
                @endif

                Hasil : <strong>{{ $resVal }}</strong>
                @if ($resScore !== null)
                    <strong>{{ ' with Confident Score : ' . round($resScore, 3) }}</strong>
                @endif
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>

</html>
