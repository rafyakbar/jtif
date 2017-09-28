<nav class="menu">
    <ul class="sidebar-menu metismenu" id="sidebar-menu">
        <li @if(Route::currentRouteName() === 'home') class="active" @endif>
            <a href="{{ route('home') }}"><i class="fa fa-home"></i> Dashboard </a>
        </li>
        <li @if(Route::currentRouteName() === 'daftar.menu') class="active" @endif>
            <a href="{{ route('daftar.menu') }}"><i class="fa fa-list"></i> Menu</a>
        </li>
        <li>
            <a href="">
                <i class="fa fa-files-o"></i> Post
                <i class="fa arrow"></i>
            </a>
            <ul class="sidebar-nav">
                @foreach(\App\Menu::all() as $item)
                    <li>
                        <a href="{{ route('daftar.post.menu', ['menu_id' => $item->id]) }}">{{ $item->nama }}</a>
                    </li>
                @endforeach
            </ul>
        </li>
        <li @if(Route::currentRouteName() === 'daftar.prodi') class="active" @endif>
            <a href="{{ route('daftar.prodi') }}"><i class="fa fa-graduation-cap"></i> Prodi</a>
        </li>
        <li @if(Route::currentRouteName() === 'daftar.pegawai') class="active" @endif>
            <a href="{{ route('daftar.pegawai') }}"><i class="fa fa-users"></i> Pegawai</a>
        </li>
        <li @if(Route::currentRouteName() === 'daftar.prasarana') class="active" @endif>
            <a href=""><i class="fa fa-laptop"></i> Prasarana</a>
        </li>
        <li @if(Route::currentRouteName() === 'daftar.lain-lain') class="active" @endif>
            <a href=""><i class="fa fa-gears"></i> Lain-lain</a>
        </li>
    </ul>
</nav>