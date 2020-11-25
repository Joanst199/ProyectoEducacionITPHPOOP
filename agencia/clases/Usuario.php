<?php

class Usuario
{
public function login()
{
    //validar mas registrar login
    $usuEmail = $_POST ['usuEmail'];
    $usuClave = $_POST ['usuClave'];
    $link = Conexion:: conectar();
    $sql = "SELECT usuNombre
                FROM usuarios
                WHERE usuEmail = :usuEmail
                AND usuClave = :usuClave";
    $stmt = $link -> prepare($sql);
    $stmt->bindParam('usuEmail',$usuEmail);
    $stmt->bindParam('usuClave',$usuClave);
    $stmt-> execute();
    $cantidad = $stmt-> rowCount();
    if ($cantidad == 0) {
        //redireccion a formLogin con mensaje de error
        header('location: formLogin.php?error=1');
    }
    else {
        $_SESSION ['login']=1;
        $datosUsuario = $stmt-> fetch (PDO::FETCH_ASSOC);
        $_SESSION ['usuNombre'] = $datosUsuario ['usuNombre'];
        header('location:admin.php');
    }
}

public function logout()
{
    session_destroy();
    header('formLogin.php');
}

public function autenticar()
{
    if (!isset($_SESSION['login'])) {
        header('location:fomLogin.php?error=1');
    }
}
}
?>