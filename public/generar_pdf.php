<?php
session_start();
include "conexion.php";

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

if (!isset($_SESSION['usuario'])) {
    die("Debes iniciar sesión.");
}

$usuario = $_SESSION['usuario'];
$carrito = $_SESSION['carrito'][$usuario];

$html = "
<h1>STARWROK</h1>
<h3>Ticket de Compra</h3>
<p>Cliente: $usuario</p>
<hr>
";

$total = 0;

foreach ($carrito as $id) {

    $res = $conexion->query("SELECT * FROM articulos WHERE id=$id");

    if ($res->num_rows > 0) {

        $a = $res->fetch_assoc();

        $html .= "
        <p>
        <b>{$a['nombre']}</b><br>
        Precio: $ {$a['precio']}
        </p>
        <hr>
        ";

        $total += $a['precio'];
    }
}

$html .= "<h2>Total: $ $total</h2>";

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream('ticket_starwrok.pdf');
?>