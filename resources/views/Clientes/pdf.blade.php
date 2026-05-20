<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Clientes SmartFit</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #FFD700;
            color: #000;
        }

        th, td {
            border: 1px solid #000;
            padding: 8px;
            font-size: 12px;
        }
    </style>
</head>
<body>

<h1>Clientes SmartFit</h1>

<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Plan</th>
            <th>Gimnasio</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $c)
        <tr>
            <td>{{ $c->nombre }} {{ $c->apellidos }}</td>
            <td>{{ $c->correo_electronico }}</td>
            <td>{{ $c->estado }}</td>
            <td>{{ $c->plan->nombre_plan }}</td>
            <td>{{ $c->gimnasio->nombre }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>