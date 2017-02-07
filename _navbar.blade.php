<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">{{ $brand or config('app.name', 'Laravel Application') }}</a>
        </div>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav nav">
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
    </div>
</nav>