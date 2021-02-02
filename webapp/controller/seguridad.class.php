<?php
    session_start();
    //comprobar si el usuario esta activo
    if(!isset($_SESSION['miSesion'])){
        //si no existe la variable de sesion, lo enviamos al formulario de autentificación
        header("location:../view/formLogin.html");
        exit();
    }else{

    }
?>