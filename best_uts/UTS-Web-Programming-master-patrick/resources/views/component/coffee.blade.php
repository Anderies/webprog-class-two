<div class="tabs is-toggle">
    <ul>
        @foreach($categories as $cat)
            <li class="{{ ($cat->category_name === $currCoffee) ? 'is-active' : '' }}">
                <a href="/{{ $users->id }}/{{ $cat->category_name }}" class="text-decoration-none">
                    <span>{{ $cat->category_name }}</span>
                </a>
            </li>
        @endforeach
    </ul>
</div>

<div class="coffeeContent">
    @foreach($coffees as $c)
        <div class="cc card" data-name="coffee-{{ $c->id }}">
            <div class="card-image">
                <figure class="image is-square">
                <img src="{{ $c->image_url }}" alt="Image">
                </figure>
            </div>
            <div class="card-content">
                <div class="content">
                <h4>{{ $c->coffee_name }}</h4>
                <p>IDR {{ $c->price }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="confirmation-purchase">
    @foreach($coffees as $c)
        <div class="confirmation" data-target="coffee-{{ $c->id }}">
            <h3 class="confirmation-title">{{ $c->coffee_name }}</h3>
            <div class="price">IDR {{ $c->price }}</div>
            <div class="buttons">
                <form method="post" action="{{ route('buy') }}">
                    @csrf
                    <input type="text" name="user_id" value="{{ $users->id }}" style="display: none;">
                    <input type="text" name="coffee_id" value="{{ $c->id }}" style="display: none;">
                    <input onclick="myFunction()" type="submit" value="BUY" class="buy text-decoration none">
                </form>
                <form action="">
                    <input type="submit" value="NO" class="no text-decoration-none">
                </form>
            </div>
        </div>
    @endforeach
</div>
