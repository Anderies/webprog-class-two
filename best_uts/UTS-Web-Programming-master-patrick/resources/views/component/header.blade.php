<div class="head">
    <div class="greeting">
        <div class="greet">
            <p>{{ $greet }},</p>
            <p>{{ $users->name }}!</p>
        </div>

        <div class="loyalty">
            <p style="color: {{ ($users->loyalty === "Gold") ? '#C6A961' : '#006F42' }}">{{ $users->loyalty }} Level</p>
        </div>
    </div>

    <div class="navTabs">
        <ul class="nav nav-underline">
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Profile") ? 'active' : '' }}" aria-current="page" href="/{{ $users->id }}">
                    <p class="fa-regular fa-user"></p>
                    Profile
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Transaction") ? 'active' : '' }}" href="/{{ $users->id }}/transactions">
                    <p class="fa-regular fa-sharp fa-envelope"></p>
                    Transaction
                </a>
            </li>
        </ul>
    </div>
    <hr>
</div>
