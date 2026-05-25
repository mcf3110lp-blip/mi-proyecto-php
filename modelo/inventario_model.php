<?php
require_once('bd/conexion.php');

class inventario_model {

    private $con;

    public function __construct(){
        $this->con = Conexion::conectar();
    }

    public function guardar($p,$c,$e,$cant,$precio){
        $total = $cant * $precio;

        $sql = "INSERT INTO inventario(producto,cliente,empresa,cantidad,precio,total)
                VALUES('$p','$c','$e','$cant','$precio','$total')";

        return $this->con->query($sql);
    }

    public function get(){
        return $this->con->query("SELECT * FROM inventario");
    }
}