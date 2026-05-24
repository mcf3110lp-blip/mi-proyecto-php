<?php
class BaseController {

    public function view($vista, $datos = []){
        extract($datos);

        require_once('vistas/header.php');
        require_once('vistas/' . $vista . '.php');
        require_once('vistas/footer.php');
    }
}