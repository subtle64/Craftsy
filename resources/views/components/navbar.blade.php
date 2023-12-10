<div class="d-flex flex-column" style="background-color: #F1DEC9">
    <div class="d-flex justify-content-sm-between">
        <h1 class="m-4 d-flex align-items-center">
            <a href="/" style="text-decoration: none; color: #8D7B68;  font-family:Abhaya Libre ExtraBold">Craftsy</a>
        </h1>

        <div class="d-flex m-3 align-items-center w-50">
            <form action="/search" method="GET" class="d-flex m-3 align-items-center w-100">
                <input class="form-control me-2 rounded-5" type="text" placeholder="Search" aria-label="Search" name="search">
                <button class="btn rounded-5" type="submit" style="background-color: #C8B6A6; font-family: Tahoma">Search</button>
            </form>
        </div>

        <div class="d-flex m-3 align-items-center">
            @guest
            <a href="/login" class="btn rounded-5 m-3" style="background-color: #C8B6A6">Sign In</a>
            <a href="/register" class="btn rounded-5 me-3 mt-3 mb-3" style="background-color: #C8B6A6">Register</a>
            @endguest
            <a href="/cart">
                <i class="glyphicon glyphicon-shopping-cart me-4" style="color: black"></i>
            </a>

            @auth
            <li class="nav-item dropdown" style="list-style-type: none;">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>Welcome, {{ Auth::user()->name }}!&nbsp;<i class="glyphicon glyphicon-user"></i></span>
                </a>
                <ul class="dropdown-menu">
                    <a class = "dropdown-item" href="/history">Transaction History</a>
                    <form action="/logout" method = "POST">
                        @csrf
                        <button class = "dropdown-item" type="submit">Logout</button>
                    </form>
                </ul>
            </li>

            @endauth
        </div>
    </div>
    <marquee behavior="" direction="">
    <div class="d-flex justify-content-sm-evenly">
        <a class="ms-4 me-3 mb-3" style="text-decoration: none; color: black; font-family: Tahoma">Knitting</a>
        <a class="ms-4 me-3 mb-3" style="text-decoration: none; color: black; font-family: Tahoma">Macrame</a>
        <a class="ms-4 me-3 mb-3" style="text-decoration: none; color: black; font-family: Tahoma">Felt Art</a>
        <a class="ms-4 me-3 mb-3" style="text-decoration: none; color: black; font-family: Tahoma">Clay Art</a>
        <a class="ms-4 me-3 mb-3" style="text-decoration: none; color: black; font-family: Tahoma">Paper Craft</a>
        <a class="ms-4 me-3 mb-3" style="text-decoration: none; color: black; font-family: Tahoma">Wire Art</a>
        <a class="ms-4 me-3 mb-3" style="text-decoration: none; color: black; font-family: Tahoma">Handmade Supplies</a>
        <a class="ms-4 me-3 mb-3" style="text-decoration: none; color: black; font-family: Tahoma">Crochet</a>
    </div>
    </marquee>
</div>