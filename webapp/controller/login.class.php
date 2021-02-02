<?php
    //session_start();
    require "../controller/ControllerUsuario.class.php";
    $ctr=new ControllerUsuario();
    if(isset($_POST['login'])){
        $username=trim($_POST['username']);
        $password=sha1(trim($_POST['password']));
        //Llamar al metodo autentificar 
        $ctr->autentificar($username,$password);
    }else{
        header("location:../view/formLogin.html");
    }
?>