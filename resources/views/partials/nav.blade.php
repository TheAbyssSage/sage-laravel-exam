<nav>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('courses.index') ? 'active' : '' }}" 
               href="{{ route('courses.index') }}">Courses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('courses.create') ? 'active' : '' }}" 
               href="{{ route('courses.create') }}">New Course</a>
        </li>
    </ul>
</nav>