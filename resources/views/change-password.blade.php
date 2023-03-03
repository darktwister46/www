<?php
session_start();
$_SESSION['email'] = $_POST['email'];
$password = $_POST['password'];
function existeUsuario($email, $password){
    $usuario = "root";
    $contraseña = "";
    $servidor = "localhost";
    $database = "medac";
    $conexion = mysqli_connect($servidor, $usuario, $contraseña, $database);

    if (!$conexion) {

        die('Conexion fallida: ' . mysqli_connect_error());

    }
    # Consulta
    $consulta = "UPDATE usuarios SET password = '$password' WHERE email = '$email'";
    # Seleccion tabla
    mysqli_select_db($conexion, "medac");
    # Ejecutamos la sentencia
    $datos = mysqli_query($conexion, $consulta);
    /*Contamos el numero de filas que devuelve la consulta, si el numero de filas es mayor de 0 devuelve true, si no es mayor de 0 devolvera false.*/
    return 1;
    }
    /* Comprobando si el usuario existe en la base de datos comprobando si devuelve alguna fila de resultado. */
    $cambio = existeUsuario($_SESSION['email'], $password);
    /* Creando una variable para saber si la contraseña ha sido cambiada en otro archivo php.*/
    if($cambio == 1){
        $_SESSION['passwordchange'] = 1;
        header("Location: dashboard2.php");
    } else {
        $_SESSION['passwordchange'] = 0;
        header("Location: dashboard2.php");
    }
  
?>