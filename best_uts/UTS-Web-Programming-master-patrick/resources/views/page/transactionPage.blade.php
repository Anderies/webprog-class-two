@extends('layouts.main')

@section('container')
    <div class="homeContent">
        <div class="hc promotion">
            <h5 class="transaction-title">Transaction History</h5>

            @foreach($transactions as $trans)
                <div class="box promoBox">
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-128x128">
                            <img class="image is-128x128" src="{{ $trans->coffee->image_url }}" alt="Image">
                            </figure>
                        </div>

                        <div class="media-content">
                            <div class="content trans-detail">
                                <h3 class="trans-date">{{ date('j F Y', strtotime($trans->transaction_date)) }}</h3>
                                <p class="trans-item">
                                    <strong>{{ $trans->coffee->coffee_name }}</strong>
                                    <br>
                                    <strong>IDR {{ $trans->coffee->price }}</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
