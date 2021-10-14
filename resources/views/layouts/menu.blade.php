<li class="nav-item">
    <a href="{{ route('hotels.index') }}" class="nav-link {{ Request::is('hotels*') ? 'active' : '' }}">
        <p>Hotels</p>
    </a>
</li>
@can('user-management')
    <li class="nav-item">
        <a href="{{ route('admin.user.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
            <p>Users</p>
        </a>
    </li>
@endcan

@can('role-list')
    <li class="nav-item">
        <a href="{{ route('admin.role.index') }}" class="nav-link {{ Request::is('role*') ? 'active' : '' }}">
            <p>Role</p>
        </a>
    </li>
@endcan



<li class="nav-item">
    <a href="{{ route('rooms.index') }}" class="nav-link {{ Request::is('rooms*') ? 'active' : '' }}">
        <p>Rooms</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('feedback.index') }}" class="nav-link {{ Request::is('feedback*') ? 'active' : '' }}">
        <p>Feedback</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('reservations.index') }}" class="nav-link {{ Request::is('reservations*') ? 'active' : '' }}">
        <p>Reservations</p>
    </a>
</li>
