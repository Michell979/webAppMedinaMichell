<?php
    class Conexion{
        private $dbhost;
        private $usuario;
        private $password;
        private $dbname;
        private $conn;
        /*metodo constructor*/
        public function __construct ($dbhost,$usuario,$password,$dbname){
            $this->dbhost=$dbhost;
            $this->usuario=$usuario;
            $this->password=$password;
            $this->dbname=$dbname;
        }
        /*metodo para establecer La conexion a la base de datos*/
        public function obtenerConn(){
            $this->conn=mysqli_connect($this->dbhost,$this->usuario,$this->password,$this->dbname);
            //verificar la conexion
            if(!$this->conn){
                die("<br>Error en la conexion de la base:".mysqli_connect_error());
            }else{
                echo "<br>La conexión se establecio con exito";
            }
        }
        /*metodo para consultar y ejeciutar operaciones*/
        public function ejecutarQuery($sql){
            return mysqli_query($this->conn,$sql);
        }
        /*cerrar la conexion a la base de datos*/
        public function cerrar(){
            mysqli_close($this->conn);
        }
    }
?>