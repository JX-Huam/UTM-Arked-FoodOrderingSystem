<nav class="navbar navbar-expand-lg" style="background-color: #800000; color: #fff;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: #fff;">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" style="color: #fff;">Home</a>
                </li>
                @auth
        
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" style="color: #fff;">Logout</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" style="color: #fff;">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('registration') }}" style="color: #fff;">Registration</a>
                    </li>
                @endauth
            </ul>
            <span class="navbar-text" style="color: #fff;">@auth{{ auth()->user()->name }}@endauth</span>
        </div>
    </div>
</nav>
