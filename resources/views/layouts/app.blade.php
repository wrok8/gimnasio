<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>SmartFit</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #111;
            color: #fff;
        }

        .navbar {
            background-color: #000;
            border-bottom: 3px solid #FFD700;
        }

        label {
            color: #fff;
            font-weight: 500;
        }

        .navbar-brand {
            color: #FFD700 !important;
            font-weight: bold;
            font-size: 22px;
        }

        .btn-primary {
            background-color: #FFD700;
            border: none;
            color: #000;
        }

        .btn-primary:hover {
            background-color: #e6c200;
        }

        .btn-warning {
            background-color: #FFC107;
            border: none;
            color: #000;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .card {
            background-color: #1c1c1c;
            border: 1px solid #FFD700;
            border-radius: 10px;
        }

        .table {
            background-color: #1c1c1c;
            color: #fff;
        }

        .table thead {
            background-color: #FFD700;
            color: #000;
        }

        .form-control, .form-select {
            background-color: #2a2a2a;
            color: #fff;
            border: 1px solid #FFD700;
        }

        .form-control:focus {
            border-color: #FFD700;
            box-shadow: none;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <span class="navbar-brand">💪 SmartFit</span>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link text-warning" href="{{ route('clientes.index') }}">Clientes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-warning" href="{{ route('planes.index') }}">Planes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-warning" href="{{ route('gimnasios.index') }}">Gimnasios</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-warning" href="{{ route('personal.index') }}">Personal</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>