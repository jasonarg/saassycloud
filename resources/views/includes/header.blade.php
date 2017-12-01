<header class="sticky-top">
    <nav class="navbar navbar-light navbar-expand-md bg-white py-4">
        <a class="navbar-brand" href="{{ url('/') }}"><span class="font-weight-bold">SaaS</span>sy Cloud</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0" id="navbarToggler">
                <li class="nav-item mx-md-5">
                    <a class="nav-link" href="/products">Products</a>
                </li>
                <li class="nav-item mx-md-5">
                    <a class="nav-link" href="/support">Support</a>
                </li>
            </ul>

            @if (Auth::guest())
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/signup/compare"><button class="btn btn-white">Buy Now</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/signup/compare"><button class="btn btn-info">Start for Free</button></a>
                </li>
            </ul>
            @else

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->email }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a href="{{ route('logout') }}" class="dropdown-item"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </li>
            @endif
        </div>
    </nav>
</header>