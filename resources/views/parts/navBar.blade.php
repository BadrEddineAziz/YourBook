<nav class="navbar fixed-top navbar-expand-md   " style="background-color:#1B4571;font-size:large; ">
            <div class="container">
                <a class="navbar-brand" class="logo" style="color:#ffffff;font-size:large" href="{{ url('/admin') }}">
                    YourBook
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto" style="text-align:center">
                 
                    </ul>
                    <ul class="navbar-nav">
                    <a class="nav-link active" class="logo" style="color:#ffffff;font-size:large; text-align:center" href="{{ url('/') }}">
                    Home
                </a>
                <a class="nav-link active" class="logo" style="color:#ffffff;font-size:large; text-align:center" href="{{ route('allBooks') }}">
                     Books
                </a>
                <a class="nav-link active" class="logo" style="color:#ffffff;font-size:large; text-align:center" href="{{ route('about') }}">
                    About
                </a>
                
                    </ul>
                 
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}" style="color:#ffffff;" >{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}" style="color:#ffffff;">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <a class="nav-link active" class="logo" style="color:#ffffff;font-size:large; text-align:center" href="{{ route('search') }}">
                        <i class="fa fa-search"></i>
                </a>
                         
                                @if(Auth::user()->admin == 1)
                            <a id="navbarDropdown" style="color:#ffffff;" class="nav-link" href="{{ route('dashbord') }}" >
                                    admin panel
                                </a>
                                @endif
                                <a id="navbarDropdown" style="color:#ffffff;" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="font-size:large">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
