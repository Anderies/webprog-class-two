<ol class="list-group">
    @if ($admin == true)
        <h1>Halaman Admin</h1>
        <div>
            <button>Create</button>
            <button>Delete</button>
        </div>

        @forelse ($arrMahasiswa as $val)
            <li class="list-group-item">{{ $val }}</li>
        @empty
            <div class="alert alert-dark d-inline-block">No data...</div>
        @endforelse
    @else
        @forelse ($arrMahasiswa as $val)
            <li class="list-group-item">{{ $val }}</li>
        @empty
            <div class="alert alert-dark d-inline-block">No data...</div>
        @endforelse
    @endif


</ol>
