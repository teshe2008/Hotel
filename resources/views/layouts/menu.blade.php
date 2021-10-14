<li class="nav-item">
    <a href="{{ route('hotels.index') }}"
       class="nav-link {{ Request::is('hotels*') ? 'active' : '' }}">
        <p>Hotels</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.user.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('rooms.index') }}"
       class="nav-link {{ Request::is('rooms*') ? 'active' : '' }}">
        <p>Rooms</p>
    </a>
</li>


