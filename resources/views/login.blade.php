<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5 form-signin w-25 m-auto mt-5">
        <form action="/login" method="post">
            <h1 class="h3 mb-3 fw-normal text-center">Silakan Masuk</h1>
            @csrf
            <div class="form-floating mb-3">
                <input type="email" name="email"
                    class="form-control @error('email')
            is-invalid
        @enderror" id="email"
                    placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                    required>
                <label for="password">Password</label>
            </div>
            <div class="form-check text-start my-2">
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        </form>
        <small class="d-block text-center">Belum punya akun? <a href="/register">Daftar Sekarang!</a>
        </small>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
