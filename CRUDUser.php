<?php

function login()
{
    require_once('bd.php');
    $sql = "SELECT U.usuario, U.nombre, U.email, U.password, R.Rol as rol FROM Usuarios U LEFT JOIN Roles R on U.Id_Rol_Usuario = R.id_Rol WHERE U.usuario = :usuario";
    $consulta = $bd->prepare($sql);
    $consulta->execute(["usuario" => $_POST['usuario']]);
    $usuario = $consulta->fetch();

    if (!empty($usuario) and password_verify($_POST['password'], $usuario['password'])) {
        $_SESSION['rol'] = $usuario['rol'];
        $_SESSION['usuario'] = $usuario['usuario'];

        return true;
    } else {
        return $error = 'Usuario o clave incorrectos';
    }
}

function insertar()
{
    require_once('bd.php');

    $query = "SELECT COUNT(*) FROM Usuarios WHERE usuario = :usuario";
    $stmt = $bd->prepare($query);
    $stmt->execute(["usuario" => $_POST['usuario']]);
    $numberRows = $stmt->fetchColumn();

    if ($numberRows == 0) {


        $sql = "INSERT INTO Usuarios(usuario,nombre,apellidos, email, password,id_Rol_usuario) VALUES (:usuario,:nombre,:apellidos,:email,:password,:rolUsuario)";
        $consulta = $bd->prepare($sql);
        $consulta->execute(["usuario" => $_POST['usuario'], "nombre" => $_POST['nombre'], "apellidos" => $_POST['apellidos'], "email" => $_POST['email'], "password" => password_hash($_POST['contrasenya1'], PASSWORD_DEFAULT), "rolUsuario" => 2]);

        header("Location:index.php");
    } else { ?>

        <script>
            alert("El usuario ya existe");
        </script>
<?php
    }
}
