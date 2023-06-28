<?php
require_once '../controller/AutorController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre_completo = $_POST['nombre_completo'];
    $nacionalidad = $_POST['nacionalidad'];
    $distinciones = $_POST['distinciones'];
    $controller = new AutorController();

    $result = $controller->actualizarAutor($id, $nombre_completo,$nacionalidad,$distinciones);

    if ($result) {
        header('Location: index.php');
        exit();
    } else {
        echo 'Error al actualizar el Autor';
    }
} else {
    header('Location: index.php');
    exit();
}
