<?php
    require "ControllerUsuario.class.php";
    //una instancia.
    $ctr=new ControllerUsuario();
    if(isset($_POST['remitir'])){
        //recibir los datos 
        $nombre=trim($_POST['nombre']);
        $email=trim($_POST['email']);
        $username=trim($_POST['username']);
        $password=trim($_POST['password']);
        //instancia de tipo usuario
        $usuario=new Usuarios();
        $usuario->setNombre(trim($_POST['nombre']));
        $usuario->setEmail($email);
        $usuario->setUsername($username);
        $usuario->setPassword(sha1($password));
        //guardar el objeto usuario
        $ctr->agregar($usuario);
    }else{
        header("location:../view/formLogin.html");
    }
?>