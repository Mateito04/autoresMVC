<?php
require_once '../controller/AutorController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_completo = $_POST['nombre_completo'];
    $nacionalidad = $_POST['nacionalidad'];
    $distinciones = $_POST['distinciones'];

    $controller = new AutorController();

    $result = $controller->crearAutor($nombre_completo,$nacionalidad,$distinciones);

    if ($result) {

        header('Location: index.php');
        exit();
    } else {

        echo 'Error al crear el Autor';
    }
} else {

    header('Location: index.php');
    exit();
}
