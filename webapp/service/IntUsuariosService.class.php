<?php
/* 
    logica del negocio para la tabla usuarios
*/
    interface IntUsuariosService{
    public function guardar($usuario);
    public function buscarPorUsernamePassword($username,$password);
        /*
            public function obtenerTodosusuarios();
            public function eliminar($idUsuario);
            public function modificar($usuario);
        */
    }
?>