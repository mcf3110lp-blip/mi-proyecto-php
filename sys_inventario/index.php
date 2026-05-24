<?php
session_start();

require_once('controlador/usuario_controller.php');
require_once('controlador/inventario_controller.php');
require_once('controlador/Nusuariocontroller.php');

$u = new usuario_controller();
$i = new inventario_controller();
$c = new Nusuariocontroller();


$metodo = $_REQUEST['m'] ?? 'index';

switch($metodo){

    case 'login': $u->login(); break;
    case 'logout': $u->logout(); break;
    case 'dashboard': $u->dashboard(); break;
    case 'guardarc': $c->guardarc(); break;

    case 'guardar': $i->guardar(); break;
    case 'listar': $i->listar(); break;
    case 'reporte': $i->reporte(); break;
    case 'guardarc': $c->guardarc(); break;
    default: $u->index(); break;
}