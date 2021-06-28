<header>
    <div class="d-flex justify-content-center">
        <a href="{{route('home')}}">
            <h1>ECOMMERCE</h1>
        </a>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('home') ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{request()->routeIs('products.*') ? 'active' : ''}}" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('products.index')}}">Men</a></li>
                            <li><a class="dropdown-item" href="#">Women</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('us') ? 'active' : ''}}" href="{{route('us')}}">Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{request()->routeIs('contact.*') ? 'active' : ''}}" href="{{route('contact.index')}}">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="" class="mx-3 my-3 text-dark"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>