<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        @can('editor')
            <a class="dropdown-item" href="{{ route('newPostForm') }}">
                {{ __('New post') }}
            </a>
            <a class="dropdown-item" href="{{ route('postsList') }}">
                {{ __('My posts') }}
            </a>
        @endcan
        

        
            <a class="dropdown-item" href="{{ route('userProfile') }}">
                {{ __('Profile') }}
            </a>
        

        

        @if (Auth::user()->is_admin == '1')
            <a class="dropdown-item" href="{{ route('mainAdminModule') }}">
                {{ __('Admin module') }}
            </a>
            
        @endif

        <hr class="dropdown-divider">

        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    
</li>