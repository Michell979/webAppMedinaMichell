<?php
    require "../controller/ControllerUsuario.class.php";
    $ctr=new ControllerUsuario();
    //$ctr->agregar();
    $ctr->autentificar("root",sha1("L4uigi4_"));
?>