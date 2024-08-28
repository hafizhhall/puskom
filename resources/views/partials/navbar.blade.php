<nav class="navbar bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">TOKO HAPE GEJAYAN</a>
        @auth
            <form action="/logout" method="post">
                @csrf
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
        @else
            <a class="btn btn-primary" href="/login" role="button">Login</a>
        @endauth
    </div>
</nav>
