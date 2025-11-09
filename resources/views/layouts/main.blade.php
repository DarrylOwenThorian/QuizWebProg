<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduFun</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f6f7fb;
        }

        .navbar {
            background: #222;
        }

        .navbar-brand, .nav-link {
            color: #fff !important;
        }

        .nav-link:hover {
            color: #0d6efd !important;
        }

        footer {
            background: #222;
            padding: 25px;
            text-align: center;
            color: #fff;
        }

        .card {
            border-radius: 8px;
        }

        .card:hover {
            transform: translateY(-4px);
            transition: 0.2s;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">EduFun</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li><a class="nav-link" href="/">Home</a></li>
                <li><a class="nav-link" href="/category">Category</a></li>
                <li><a class="nav-link" href="/writer">Writers</a></li>
                <li><a class="nav-link" href="/about">About Us</a></li>
            </ul>
        </div>
    </div>
</nav>

{{-- MAIN CONTENT --}}
<div class="container py-4 flex-grow-1">
    @yield('content')
</div>

<footer class="mt-auto">
    © {{ date('Y') }} EduFun — Learn Smarter
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
