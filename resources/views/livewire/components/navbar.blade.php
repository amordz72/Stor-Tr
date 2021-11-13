<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navColor">
        <a class="navbar-brand text-uppercase" href="{{ url('/') }}"> {{ config('app.name', 'Laravel') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>




        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-capitalize" href="{{ url('/home') }}">Home <span
                            class="sr-only">(current)</span></a>
                </li>

                @guest


                @if (Route::has('login'))


                @endif
                {{-- @endif اذا_كان_التوجيه_من_التسجيل--}}
                @if (Route::has('register'))

                @endif
                {{-- اذا_كان_التوجيه_ليس_من_التسجيل_او_الدخول--}}

                @else
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Actions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('users')}}">Users</a>
                        <a class="dropdown-item" href="{{route('backups')}}">Backup</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                @endguest

            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>

                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @if(auth()->user()->hasRole('super_admin'))
                        <a class="dropdown-item" href="{{ route('users.index') }}">
                            الصلاحيات
                        </a>
                        @endif

   <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
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
    </nav>
</div>
<style>
    .navColor {
        background-color: #1b4050 !important;
    }
</style>
