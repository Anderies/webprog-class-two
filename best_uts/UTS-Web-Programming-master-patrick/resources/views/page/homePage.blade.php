@extends('layouts.main')

@section('container')
    <div class="homeContent">
        <div class="hc starNum">
            <i class="sbal star fa-solid fa-star fa-xl"></i>
            <p class="sbal">{{ $stars }} Star Balance</p>
        </div>

        <div class="hc reedemButton">
            <button type="button" class="btn btn-dark btn-sm">Reedem <i class="sbal star fa-solid fa-star"></i></button>
        </div>

        <div id="carouselExampleIndicators" class="hc carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/image/promo1.jpg" class="d-block w-100" alt="promo1">
                </div>
                <div class="carousel-item">
                    <img src="/image/promo2.jpg" class="d-block w-100" alt="promo2">
                </div>
                <div class="carousel-item">
                    <img src="/image/promo3.jpg" class="d-block w-100" alt="promo3">
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

        <div class="hc promotion">
            <h5>Promo Information</h5>

            <div class="box promoBox">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-128x128">
                        <img class="image is-128x128" src="/image/promo4.jpg" alt="Image">
                        </figure>
                    </div>

                    <div class="media-content">
                        <div class="content">
                        <p>
                            <strong>Buy 1 Get 1 Coffee</strong>
                            <br>
                            Looking for a delicious and affordable way to start your day? Look no further than our "Buy 1 Get 1 Coffee" promotion!
                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box promoBox">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-128x128">
                        <img class="image is-128x128" src="/image/promo5.jpg" alt="Image">
                        </figure>
                    </div>

                    <div class="media-content">
                        <div class="content">
                        <p>
                            <strong>Value Set</strong>
                            <br>
                            Wanna buy a drink for you and your love one? Don't worry, we got your back. Nothing's better than our "Value Set" promotion!
                        </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box promoBox">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-128x128">
                        <img class="image is-128x128" src="/image/promo6.jpg" alt="Image">
                        </figure>
                    </div>

                    <div class="media-content">
                        <div class="content">
                        <p>
                            <strong>10.10 Flash Sale</strong>
                            <br>
                            Having trouble treating your friend? Leave it to us, cause Flash Sale is open now! Get your second beverage for only 10K!
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="/{{ $users->id }}/Espresso">
            <div class="hc coffeeBtn">
                <button type="button" class="btn btn-dark btn-sm float-end" style="background-color: {{ ($users->loyalty === "Gold") ? '#C6A961' : '#006F42' }} !important">Coffee</button>
            </div>
        </a>
    </div>
@endsection
