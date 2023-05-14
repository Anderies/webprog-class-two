@extends('navbar')

@section('title','Transaction')

@section('content')
<div style="background-color: {{$user->membership->hex_code}};position: fixed;display: inline; top: 10;left:50%;z-index: 200; width: 200px; transform:translate(-50%, 0%)">
    <div class="toast align-items-center {{$success && $success=="Success" ? "":"visually-hidden"}}" id="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
          <div class="toast-body">
           <b>Purchase Success!</b>
         </div>
          <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
</div>

<div class="ms-5">
    @foreach ($transaction as $a)
    <div class="card mt-2" style="width: 20rem; height: 22rem;">
        <img src="{{$a->product->image_path}}" class="card-img-top">
        <div class="card-body">
        <h5 class="card-title">{{$a->product->name}}</h5>
        <p class="card-text">Date : {{date('d-m-Y', strtotime($a->created_at))}}</p>
        <p class="card-text">Price : Rp.{{$a->product->price}}</p>
        </div>
    </div>
    @endforeach
</div>

@endsection


<script>
    window.onload = (event) => {
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl)
        })
        toastList.forEach(toast => toast.show())
    };

    </script>