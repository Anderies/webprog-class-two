<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .nav-pills .nav-link.active {
            background-color: #000000 !important; 
            color: #ffffff !important;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script><body>
    <nav class="bg-body-tertiary border-bottom shadow-sm pt-2" style="background-color: #f6f6f6">
        <div class="d-flex justify-content-around align-items-center">
            <h3 class="text-wrap word-break" style="width: 200px">Good {{$day}}, {{$user->name}}</h3>
            <h3 style="color:{{$user->membership->hex_code}}">
                {{$user->membership->name}} Level
            </h3>
        </div>
        <div class="d-flex justify-content-evenly py-2">
            <a class="text-decoration-none text-dark border-dark d-flex align-items-center {{$status ==1 ? "border-bottom":""}}" href="/{{$user->id}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person me-2   " viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                </svg>
                Profile
            </a>

            <a class="text-decoration-none text-dark border-dark d-flex align-items-center {{$status ==2 ? "border-bottom":""}}" href="/{{$user->id}}/transaction">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope me-2" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                </svg>
                Transaction
            </a>
        </div>
    </nav>
   
    
    <div>
        @yield('content')
    </div>
 
    <footer class="text-center text-white py-2" style="position: sticky; bottom: 0;background-color:{{$user->membership->hex_code}}">
        @ 2023 Virgie Cecillia Johan. All Rights Reserved.
    </footer>
    
</body>

</html>