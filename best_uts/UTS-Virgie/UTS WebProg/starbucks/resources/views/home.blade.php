@extends('navbar')

@section('title','Home')

@section('content')

    <div class="d-flex align-items-center ps-3 mt-3" style="height: 50px;">
        <div class="h-100 d-flex align-items-center m-0 p-0">
            <h2 class="m-0 p-0">{{$user->star_number}}</h2>
        </div>
        <div class="h-100 d-flex align-items-center">
            <div class="" style="color: {{$user->membership->hex_code}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-star-fill ms-2" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
            </div>
        </div>
    </div>
    <div class="ps-3">
        <p>Star Balance</p>
    </div>

    <div class="px-3 position-relative">
        <div class="progress position-relative" style="height: 10px;" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            <div class="progress-bar" style="max-width: 100%; width: {{($percentage)}}%; background-color:{{$user->membership->hex_code}};"></div>
        </div>
            @php
                $total = 25
            @endphp    
            @for ($i = 1; $i <= 4; $i++)
                <div class="position-absolute" style="top : -5px;left: calc({{$i * 20}}% - 10px);">
                    @if($i <= $count)
                    <div class="rounded-circle" style="width: 20px;height: 20px; background-color:{{$user->membership->hex_code}}">
                    </div>
                    @else
                    <div class="rounded-circle" style="width: 20px;height: 20px; background-color: #e9ecef">
                    </div>
                    @endif
                    <div>
                        {{$total}}
                    </div>
                    @php
                        $total = $total * 2
                    @endphp  
                </div>
            @endfor
    </div>
        
    <div>
        <button class="btn btn-dark rounded-pill px-3 mt-5 ms-3 d-flex align-items-center">
            <p class="m-0 p-0">Redeem</p>
            <div style="color: gold">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-star-fill ms-2" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
            </div>
        </button>
    </div>

    <div class="d-flex justify-content-center w-100">
        <div id="carouselExampleIndicators" class="carousel slide mt-3 " data-bs-ride="carousel" style="width: 96vw;">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/promo_files/1.jpg" class="d-block w-100 rounded" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/promo_files/2.jpg" class="d-block w-100 rounded" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/promo_files/3.jpg" class="d-block w-100 rounded" alt="...">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="ms-3 mt-3">
        <h2>Promo Information</h2>
        <div>
            <div class="me-3 my-3 pb-3 d-flex border-bottom border-dark">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <div class="">
                            <img src="promo.webp" class="img-fluid" alt="" style="width: 400px">
                        </div>
                    </div> 
                    <div class="col-9">
                        <h3>Buy 1 Get 1</h3>
                        <p class="m-0 p-0 text-wrap word-break container-sm">Looking for a delicious and affordable way to start your day? Look no futher than our "buy 1 get 1" coffee promotion!</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="me-3 my-3 pb-3 d-flex border-bottom border-dark">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <div class="">
                            <img src="promo2.webp" class="img-fluid" alt="" style="width: 400px">
                        </div>
                    </div> 
                    <div class="col-9">
                        <h3>Tumblers Day</h3>
                        <p class="m-0 p-0 text-wrap word-break container-sm">Celebrate Tumbler Day with us and get your hands on the perfect reusable cup to keep your drinks hot or cold all day long.</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="me-3 my-3 pb-3 d-flex border-bottom border-dark">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        <div class="">
                            <img src="promo3.webp" class="img-fluid" alt="" style="width: 400px">
                        </div>
                    </div> 
                    <div class="col-9">
                        <h3>30% Off tumbler Discount</h3>
                        <p class="m-0 p-0 text-wrap word-break container-sm">Thristy for a great deal? Get 30% off an coffee hurry, limited time offer only. Order now and enjoy your favorite drinks in style.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="position: relative">
        <a href="{{route('coffee', ['id' => $user->id])}}" class= "btn text-white rounded-5" style="position: fixed; bottom: 70px; right: 20px; background-color: {{$user->membership->hex_code}}">
            Coffee
        </a>
    </div>


@endsection