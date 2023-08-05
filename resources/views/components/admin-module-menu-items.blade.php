
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            @foreach ($items as $item)
                @if (Route::has($item->route))
                    <li class="nav-item">
                        <a @class(['nav-link', 'active' => $route == $item->route]) aria-current="page" href="{{ route($item->route) }}">
                            <span data-feather="home" class="align-text-bottom"></span>
                            <b>{{ $item->name}}</b>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
  </nav>

    

