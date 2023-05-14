@extends('navbar')

@section('title','Coffee')

@section('content')


<!-- Nav pills -->
<ul class="nav nav-pills my-2">
    @foreach ($category as $c)
        <li class="nav-item">
            <a class="nav-link {{$loop->index == 0 ? 'active' : ''}}" style="color: {{$user->membership->hex_code}}" data-bs-toggle="pill" href="#category{{$loop->index}}">{{$c->name}}</a>
        </li>
    @endforeach
</ul>
  
<!-- Tab panes -->
<div class=" tab-content">
    @foreach ($category as $c)
        <div class="tab-pane container my-3 {{$loop->index == 0 ? 'active' : ''}}" id="category{{$loop->index}}">
            <div class="d-flex flex-wrap justify-content-evenly">
                @foreach ($c->product as $p)
                    <div class="card mt-2" style="width: 10rem;">
                        <img src="{{$p->image_path}}" class="card-img-top">
                        <div class="card-body">
                        <h5 class="card-title">{{$p->name}}</h5>
                        <p class="card-text">{{$p->price}}</p>
                        <a class="btn bg-dark text-white" data-bs-toggle="modal" data-bs-target="#exampleModal{{$p->id}}">Purchase</a>
                        </div>
                    </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation Dialog</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        Are you sure want to purchase {{$p->name}}?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white text-dark border border-2" data-bs-dismiss="modal">Cancel</button>
                            <form action="add" method="POST">
                                @csrf
                                <input type="hidden" name="productId" value="{{$p->id}}">
                                <input type="hidden" name="userId" value="{{$user->id}}">
                                <button type="submit" class="btn btn-dark">Confirm</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    @endforeach
</div>





<script>
    
</script>

@endsection