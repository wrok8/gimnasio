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

<script>
    // Evento 1: LOAD
    window.addEventListener('load', function(){
        alert("Sistema SmartFit cargado correctamente");
    });

    document.addEventListener('DOMContentLoaded', function(){
        // Evento 2: MOUSEOVER
        document.querySelectorAll('.btn').forEach(function(btn){
            btn.addEventListener('mouseover', function(){
                btn.style.transform="scale(1.04)";
                btn.style.transition=".25s ease";
                btn.style.boxShadow="0px 0px 12px rgba(255, 215, 0, .45)";
            });

            btn.addEventListener('mouseout', function(){
                btn.style.transform="scale(1)";
                btn.style.boxShadow="none";
            });
        });

        // Evento 3: FOCUS
        document.querySelectorAll('input,select,textarea').forEach(function(campo){
            campo.addEventListener('focus', function(){
                campo.style.backgroundColor="#333";
                campo.style.color="#fff";
                campo.style.transform="scale(1.01)";
                campo.style.transition=".25s ease";
                campo.style.boxShadow="0px 0px 10px rgba(255, 215, 0, .35)";
            });

            campo.addEventListener('blur', function(){
                campo.style.backgroundColor="#2a2a2a";
                campo.style.color="#fff";
                campo.style.transform="scale(1)";
                campo.style.boxShadow="none";
            });
        });

        // Evento 4: SUBMIT
        document.querySelectorAll('form').forEach(function(formulario){
            formulario.addEventListener('submit', function(){
                alert("✅ Formulario enviado correctamente");
            });
        });
    });
</script>

</body>
</html>
