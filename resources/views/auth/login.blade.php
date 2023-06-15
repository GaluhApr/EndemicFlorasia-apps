<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title> EndemicFlorasia | Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    <link href="/assets/css/login.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />

    <link href="/sweetalert2/sweetalert2.min.css" rel="stylesheet" />
</head>

<body class="d-flex align-items-center py-4 " background="/assets/img/hero-bg.jpg">

    <main class="form-signin w-100 m-auto">
        <form action="/login" method="POST" class="form-signin">
            @csrf

            <div class="card">
                <h1 class="h3 mb-3 fw-normal">Welcome Admin</h1>
                <div class="form-group">
                    <label for="floatingInput">Email</label>
                    <input type="email" id="email"
                        class="form-control  bg-light @error('email') is-invalid @enderror" name="email"
                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" required
                        value="{{ old('email') }}" autofocus>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="floatingPassword">Password</label>
                    <input type="password" id="password" class="form-control  bg-light" name="password"
                        class="form-control" aria-describedby="passwordHelpInline" placeholder="password" required>

                </div>

                <button class="btn btn-primary w-100" type="submit">Login</button>
            </div>
        </form>
    </main>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>

</body>

</html>
