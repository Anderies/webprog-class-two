<?php var_dump($admin); ?>




@if ($admin)
    <h1>You Are Admin</h1>

    <ol class="list-group">

        @forelse ($keyMahasiswa as $data)
            <li class="list-group-item">{{ $data }} <button>Update</button>
                <button>Delete</button>
            </li>
        @empty
            <div class="alert alert-dark d-inline-block">No data...</div>
        @endforelse
    </ol>
@else
    <ol class="list-group">

        @forelse ($keyMahasiswa as $data)
            <li class="list-group-item">{{ $data }}</li>
        @empty
            <div class="alert alert-dark d-inline-block">No data...</div>
        @endforelse
    </ol>
@endif
