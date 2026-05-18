<?php

session_start();

include_once __DIR__ . "/../config/conexion.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $correo = trim($_POST['correo']);
    $password = trim($_POST['password']);

    if (empty($correo) || empty($password)) {
        echo "
        <script>
            alert('Complete todos los campos');
            window.location='../views/login.php';
        </script>
        ";
        exit;
    }


    $sql = "SELECT * FROM usuarios 
            WHERE correo = '$correo' 
            AND password = '$password'";

    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $datos = mysqli_fetch_assoc($resultado);
        $_SESSION['id_usuario'] = $datos['id_usuario'];
        $_SESSION['nombre'] = $datos['nombre'];
        $_SESSION['correo'] = $datos['correo'];

        header("Location: ../views/dashboard.php");
        exit;
    } else {
        echo "
        <script>
            alert('Correo o contraseña incorrectos');
            window.location='../views/login.php';
        </script>
        ";
    }
} else {
    header("Location: ../views/login.php");
    exit;
}
