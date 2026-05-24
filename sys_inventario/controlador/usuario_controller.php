<?php
require_once(__DIR__ . '/../modelo/usuario_model.php');
require_once(__DIR__ . '/BaseController.php');

class usuario_controller extends BaseController {

    private $model;

    public function __construct(){
        $this->model = new usuario_model();
    }

    public function index(){
        $this->view('login');
    }

    public function login(){
        $res = $this->model->login($_POST['usuario'], $_POST['password']);

        if(mysqli_num_rows($res)>0){
            $_SESSION['login'] = true;
            header("Location: index.php?m=dashboard");
        }else{
            echo "Login incorrecto";
        }
    }

    public function dashboard(){
        if(!isset($_SESSION['login'])){
            header("Location: index.php");
        }

        $this->view('inventario/form');
    }

    public function logout(){
        session_destroy();
        header("Location: index.php");
    }
}