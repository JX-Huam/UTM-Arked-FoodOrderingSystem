{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="ownercontainer">

        <a class="navbar-brand" href="/"><h3>MYUTM ARKED</h3></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <div class="ownercontainer ml-10 mr-10">
                    <li class="nav-item">
                        <button class="nav-link btn" onclick="window.location.href='/';">Home</button>
                    </li>
                </div>

                <div class="ownercontainer ml-10 mr-10">
                    <li class="nav-item">
                        <button class="nav-link btn" onclick="window.location.href='/about';">About</button>
                    </li>
                </div>

                <div class="ownercontainer ml-10 mr-10">
                    <li class="nav-item">
                        <button class="nav-link btn" onclick="window.location.href='/blog';">View Orders</button>
                    </li>
                </div>

                <div class="ownercontainer ml-10 mr-10">
                    <li class="nav-item">
                        <button class="nav-link btn" onclick="window.location.href='/blog';">View Sales</button>
                    </li>
                </div>

                <div class="ownercontainer ml-10 mr-10">
                    <li class="nav-item">
                        <button class="nav-link btn" onclick="window.location.href='/logout';">Logout</button>
                    </li>
                </div>

            </ul>
        </div>
        <form class="form-inline">
            <input class="form-control mt-3 mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="button btn btn-success my-sm-3" type="submit">
                <div style="display: flex; justify-content:center; align-items:center ">Search</div>
            </button>
        </form>
    </div>
</nav> --}}


<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">

        <a class="navbar-brand" href="/"><h3>MYUTM ARKED</h3></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/owner-home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/blog">View Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sales">View Sales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

    </div>
</nav>
