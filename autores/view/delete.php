<?php
require '../controller/AutorController.php';

$controller = new AutorController();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $autor = $controller->getAutorById($id);

    if (!$autor) {
        die('Autor no encontrado');
    }

    $controller->eliminarAutor($id);
    header('Location: index.php');
    exit;
} else {
    die('ID de Autor no especificado');
}
