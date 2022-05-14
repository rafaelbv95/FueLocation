<?php

function login()
{
    require_once('bd.php');
    $sql = "SELECT U.usuario, U.nombre, U.email, U.password, R.rol FROM Usuarios U LEFT JOIN Roles R on U.id_usuario = R.id_Rol WHERE U.usuario = :usuario";
    $consulta = $bd->prepare($sql);
    $consulta->execute(["usuario" => $_POST['usuario']]);
    $usuario = $consulta->fetch();

    if (!empty($usuario) and password_verify($_POST['password'], $usuario['password'])) {
        $_SESSION['usuario'] = $usuario['u.usuario'];
        $_SESSION['rol'] = $usuario['R.rol'];
        return true;
    } else {
        return $error = 'Usuario o clave incorrectos';
    }
}

function insertar(){

    require_once('bd.php');
    $sql = "INSERT INTO Usuarios(usuario,nombre,apellidos, email, password,id_Rol_usuario) VALUES (:usuario,:nombre,:apellidos,:email,:password,:rolUsuario)";
    $consulta = $bd->prepare($sql);
    $consulta->execute(["usuario" => $_POST['usuario'], "nombre" => $_POST['nombre'], "apellidos" => $_POST['apellidos'], "email" => $_POST['email'], "password" => password_hash($_POST['contrasenya1'], PASSWORD_DEFAULT), "rolUsuario" => 2]);
    
}


?>