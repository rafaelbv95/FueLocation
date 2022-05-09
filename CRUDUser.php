<?php

function insertar(){

    require_once('bd.php');
    echo $_POST['usuario'];
    $sql = "INSERT INTO Usuarios(usuario,nombre,apellidos, email, password,id_Rol_usuario) VALUES (:usuario,:nombre,:apellidos,:email,:password,:rolUsuario)";
    $consulta = $bd->prepare($sql);
    $consulta->execute(["usuario" => $_POST['usuario'], "nombre" => $_POST['nombre'], "apellidos" => $_POST['apellidos'], "email" => $_POST['email'], "password" => password_hash($_POST['contrasenya1'], PASSWORD_DEFAULT), "rolUsuario" => 2]);
    
}


?>