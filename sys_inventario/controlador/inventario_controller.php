<?php
require_once(__DIR__ . '/../modelo/inventario_model.php');
require_once(__DIR__ . '/BaseController.php');

class inventario_controller extends BaseController {

    private $model;

    public function __construct(){
        $this->model = new inventario_model();
    }

    public function guardar(){
        $this->model->guardar(
            $_POST['producto'],
            $_POST['cliente'],
            $_POST['empresa'],
            $_POST['cantidad'],
            $_POST['precio']
        );

        header("Location: index.php?m=listar");
    }

    public function listar(){
        $datos = $this->model->get();
        $this->view('inventario/lista', ['datos'=>$datos]);
    }

    public function reporte(){
        $datos = $this->model->get();
        $this->view('inventario/reporte', ['datos'=>$datos]);
    }
}