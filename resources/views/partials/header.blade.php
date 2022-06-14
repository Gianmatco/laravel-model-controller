<header>
    <h1>header</h1>
    <ul>
        <li>
            <a href="{{route('home')}}" class="{{Route::currentRouteName() == 'home' ? 'active' : ''}}">home</a>
        </li>
        <li>
            <a href="{{route('movies')}}" class="{{Route::currentRouteName() == 'movies' ? 'active' : ''}}">movies</a>
        </li>
        <li>
            <a href="{{route('series')}}" class="{{Route::currentRouteName() == 'series' ? 'active' : ''}}">series</a>
        </li>
    </ul>
</header>
