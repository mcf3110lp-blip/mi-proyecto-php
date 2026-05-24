<?php
require_once('bd/conexion.php');

class usuario_model {
    private $con;

    public function __construct(){
        $this->con = Conexion::conectar();
    }

    public function login($corina,$ponce){
        $sql = "SELECT * FROM usuarios WHERE usuario='$corina' AND password='$ponce'";
        return $this->con->query($sql);
    }
}