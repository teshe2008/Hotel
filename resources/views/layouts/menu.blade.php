@can('hotel-view')
    <li class="nav-item">
        <a href="{{ route('hotels.index') }}" class="nav-link {{ Request::is('hotels*') ? 'active' : '' }}">
            <i class="fa fas fa-hotel">  Hotels</i>
        </a>
    </li>
@endcan

@can('user-management')
    <li class="nav-item">
        <a href="{{ route('admin.user.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
            <i class="fa fas fa-user">  Users</i>
        </a>
    </li>
@endcan

@can('role-list')
    <li class="nav-item">
        <a href="{{ route('admin.role.index') }}" class="nav-link {{ Request::is('role*') ? 'active' : '' }}">
            <i class="fa fas fa-key">  Role</i>
        </a>
    </li>
@endcan

@can('room-list')
    <li class="nav-item">
        <a href="{{ route('rooms.index') }}" class="nav-link {{ Request::is('rooms*') ? 'active' : '' }}">
            <i class="fa fas fa-home"> Rooms</i>
        </a>
    </li>
@endcan


@can('feedback-list')
    <li class="nav-item">
        <a href="{{ route('feedback.index') }}" class="nav-link {{ Request::is('feedback*') ? 'active' : '' }}">
            <i class="fa fas fa-comments">  Feedback</i>
        </a>
    </li>
@endcan
@can('reservation-list')
    <li class="nav-item">
        <a href="{{ route('reservations.index') }}" 
        class="nav-link {{ Request::is('reservations*') ? 'active' : '' }}">
            <i class="fa fas fa-list">  Reservation</i>
        </a>
    </li>
@endcan
