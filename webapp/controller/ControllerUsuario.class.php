<?php session_start();?>
<?php
    require "../service/UsuariosServiceImp.class.php";
    require "../model/usuarios.class.php";
    class ControllerUsuario{
        /*
        public function agregar(){
            $usuario=new Usuarios();
            $userService=new UsuariosServiceImp();
            //modificar los datos del objeto usuario
            $usuario->setNombre("Luigi");
            $usuario->setEmail("Luigi1@gmail.com");
            $usuario->setUsername("Luigi");
            $usuario->setPassword(sha1("L4uigi4_"));
            $usuario->setFechaRegistro(date("Y-m-d"));
            $userService=new UsuariosServiceImp();
            $userService->guardar($usuario);
            //lo envio a la vista de autentificacion
            //header("location:../view/formLogin.html");
        }
        */
        /*metodo de produccion*/
        public function agregar($usuario){
            $userService=new UsuariosServiceImp();
            //lo envio a la vista de autentificacion
            $userService->guardar($usuario);
            header("location:../view/formLogin.html");
        }
        public function autentificar($username,$password){
            $userService=new UsuariosServiceImp();
            $usuario=new Usuarios();
            $usuario=$userService->buscarPorUsernamePassword($username,$password);
            //evaluaar si regresa un usuario valido
            if(is_object($usuario)){
                //echo "<br>Este usuario si es valido";
                //varias variables de sesion.
                /*$_SESSION['nombre']=$usuario->getNombre();
                $_SESSION['correo']=$usuario->getEmail(); */
                //arreglo asociativo
                $_SESSION['miSesion']=array();
                $_SESSION['miSesion']['nombre']=$usuario->getNombre();
                $_SESSION['miSesion']['correo']=$usuario->getEmail();
                $_SESSION['miSesion']['id']=$usuario->getId();
                //echo "<br>Bienvenido:".$_SESSION['miSesion']['nombre'];
                header("location:../view/productos.class.php");
            }else{
                //echo "<br>Este usuario no existe en la base";
                header("location:../view/formLogin.html");
            }
        }
    }
?>