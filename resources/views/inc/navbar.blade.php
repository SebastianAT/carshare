<div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">CarShare</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0"  >
                <input class="form-control mr-sm-2" type="search" placeholder="Search for available cars.." aria-label="Search" >
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <ul class="navbar-nav mr-auto"  >
                @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/home') }}">Home</a>
                            <a class="dropdown-item" href="{{ url('/inscar') }}">Add a car</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Messages</a>
                        </div>
                    </div>

                </li>
                <li class="nav-link"><a href="{{ url('/home') }}">Home</a></li>
                @else
                <li class="nav-link"><a href="{{ route('login') }}">Login</a></li>
                <li class="nav-link"><a href="{{ route('register') }}">Register</a></li>
                @endauth
                @endif
            </ul>
        </div>
    </nav>