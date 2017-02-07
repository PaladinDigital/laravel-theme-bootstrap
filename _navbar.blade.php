<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">{{ $brand or config('app.name', 'Laravel Application') }}</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            @if (isset($menu))
                @foreach ($menu as $link)
                    @if (array_key_exists('links', $link))
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $link['title'] }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                @foreach ($link['links'] as $sublink)
                                    <li><a href="{{ $sublink['url'] }}">{{ $sublink['title'] }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ $link['url'] }}">{{ $link['title'] }}</a></li>
                    @endif
                @endforeach
            @endif
            @yield('navigation')
            @yield('secondary_navigation')
            @if (\Auth::check())
                <li><a>{{ \Auth::user()->name }}</a></li>
            @endif
            @yield('navigation')
        </ul>
    </div>
</nav>