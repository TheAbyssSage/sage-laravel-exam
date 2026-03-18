<nav>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link {{ request()->is('courses') ? 'active' : '' }}" 
               href="/courses">Courses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->is('courses/create') ? 'active' : '' }}" 
               href="/courses/create">New Course</a>
        </li>
    </ul>
</nav>