<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Distance Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">Distance Calculator</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/cities') }}">Cities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/distances') }}">Distances</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/shortest-path') }}">Shortest Path</a>
                    </li>                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/distances-table') }}">List of City Distances</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
