<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PUSKOM PRODUCT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Filter
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Samsung</a></li>
                        <li><a class="dropdown-item" href="#">Xiaomi</a></li>
                        <li><a class="dropdown-item" href="#">Vivo</a></li>
                        <li><a class="dropdown-item" href="#">Oppo</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse">
            @auth
                <form action="/logout" method="post">
                    @csrf
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            @else
                <a class="btn btn-primary" href="/login" role="button">Login</a>
            @endauth
        </div>
    </div>
</nav>
