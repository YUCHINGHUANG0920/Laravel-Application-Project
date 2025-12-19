<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SampleName</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="d-flex flex-column min-vh-100">

        <!-- Header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container">
                <!-- Left: Logo + Name -->
                <a class="navbar-brand d-flex align-items-center" href="/dashboard">
                    <img src="{{ asset('images/logo.jpg') }}" class="me-2 img-fluid" style="height: 40px;" alt="logo">
                    <strong>SampleName</strong>
                </a>

                <!-- Center menu -->
                <div class="collapse navbar-collapse justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/plans">Plans</a>
                        </li>
                    </ul>
                </div>

                <!-- Right auth (guest only here) -->
                <div class="d-flex align-items-center">
                    <a href="/login" class="btn btn-outline-primary me-2">Login</a>
                    <a href="/register" class="btn btn-primary">Register</a>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="container my-4">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-light text-center py-3 mt-auto border-top">
            © {{ date('Y') }} SampleName
        </footer>

    </body>
</html>
