<nav id="sidebar">
    <!-- Sidebar Navigation Menus -->
    <span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="active">
            <a href="{{ route('home') }}"> <i class="icon-home"></i> Home </a>
        </li>
        <li>
            <a href="#menuDropdown" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="icon-list"></i> Menu
            </a>
            <ul id="menuDropdown" class="collapse list-unstyled">
                @foreach ($menus as $menu)
                    <li>
                        <a href="{{ route('menu.show', $menu->id) }}">
                            {{ $menu->menu }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>
</nav>
