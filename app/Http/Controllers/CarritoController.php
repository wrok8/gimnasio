<?php

class CarritoController {

    public static function agregar() {

        if (isset($_POST['add'])) {

            $id = (int)$_POST['id'];
            $usuario = $_SESSION['usuario'];

            if (!isset($_SESSION['carrito'][$usuario])) {
                $_SESSION['carrito'][$usuario] = [];
            }

            $_SESSION['carrito'][$usuario][] = $id;

            return "<p style='color:#22c55e'>Artículo agregado al carrito.</p>";
        }

        return "";
    }

    public static function quitar() {

        if (isset($_POST['quitar'])) {

            $usuario = $_SESSION['usuario'];
            $id = (int)$_POST['id'];

            $pos = array_search($id, $_SESSION['carrito'][$usuario]);

            if ($pos !== false) {
                array_splice($_SESSION['carrito'][$usuario], $pos, 1);
            }

            header("Location: carrito.php");
            exit();
        }
    }

    public static function vaciar() {

        if (isset($_POST['vaciar'])) {

            $usuario = $_SESSION['usuario'];
            $_SESSION['carrito'][$usuario] = [];

            header("Location: carrito.php");
            exit();
        }
    }
}
?>