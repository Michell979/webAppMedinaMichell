<?php
    require "../model/usuarios.class.php";
    $objeto=new Usuarios();
    echo "Id:".$objeto->getId();
    echo $objeto->toString();
?>