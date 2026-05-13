<?php

class AuthController {

    public static function registrar($conexion) {
        if (isset($_POST['registrar'])) {
            $usuario = $conexion->real_escape_string($_POST['usuario']);
            $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $conexion->query("INSERT INTO usuarios (usuario, password) VALUES ('$usuario', '$pass')");

            return "<p style='color:#22c55e'>Usuario registrado correctamente.</p>";
        }

        return "";
    }

    public static function login($conexion) {
        if (isset($_POST['login'])) {

            $usuario = $conexion->real_escape_string($_POST['usuario']);
            $pass = $_POST['password'];

            $res = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario'");

            if ($res->num_rows > 0) {
                $u = $res->fetch_assoc();

                if (password_verify($pass, $u['password'])) {

                    $_SESSION['usuario'] = $usuario;

                    if (!isset($_SESSION['carrito'][$usuario])) {
                        $_SESSION['carrito'][$usuario] = [];
                    }

                    header("Location: index.php");
                    exit();
                }
            }

            return "<p style='color:red'>Usuario o contraseña incorrectos.</p>";
        }

        return "";
    }

    public static function logout() {

        if (isset($_GET['logout'])) {
            unset($_SESSION['usuario']);
            header("Location: index.php");
            exit();
        }
    }
}
?>