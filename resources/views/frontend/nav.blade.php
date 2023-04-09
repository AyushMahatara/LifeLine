<nav class="navbar navbar-expand-lg bg-white shadow-lg">
    <div class="container">

        <a href="{{ url('/') }}" class="navbar-brand">Life<span class="text-danger">Line</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_1"><small class="small-title"><strong
                                class="text-warning"></strong></small> Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_2"><small class="small-title"><strong
                                class="text-warning"></strong></small> Diet & Nutrition</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_3"><small class="small-title"><strong
                                class="text-warning"></strong></small> Health Tips & Guidance</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_5"><small class="small-title"><strong
                                class="text-warning"></strong></small> Hospital</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('med') }}"><small class="small-title"><strong
                                class="text-warning"></strong></small> Medicine</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('illness') }}"><small class="small-title"><strong
                                class="text-warning"></strong></small> Diseases</a>
                </li>


                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><img src="{{ asset('images/login.png') }}" alt=""
                            width="25px"></a>
                </li> --}}
                @if (Route::has('login'))
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"><small class="small-title"><strong
                                class="text-warning"></strong></small> Logout</a>
                </li>

                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><small class="small-title"><strong
                                class="text-warning"></strong></small> Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"><small class="small-title"><strong
                                class="text-warning"></strong></small> Register</a>
                </li>
                @endauth

                @endif


            </ul>
            <div>

            </div>
</nav>