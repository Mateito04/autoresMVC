<?php
require '../controller/AutorController.php';

$controller = new AutorController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre_completo = $_POST['nombre_completo'];
    $nacionalidad = $_POST['nacionalidad'];
    $distinciones = $_POST['distinciones'];
    $controller->actualizarAutor($id,$nombre_completo,$nacionalidad,$distinciones);
    header('Location: view.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $Autor = $controller->getAutorById($id);

    if (!$Autor) {
        die('Autor no encontrado');
    }
} else {
    die('ID de Autor no especificado');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Editar Autor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-4 mb-4">Editar Autor</h2>
        <form action="edit_process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $Autor['id']; ?>">
            <div class="form-group">
                <label>Título:</label>
                <input type="text" name="nombre_completo" class="form-control" value="<?php echo $Autor['nombre_completo']; ?>" required>
            </div>
            <div class="form-group">
                <label>Autor:</label>
                <input type="text" name="nacionalidad" class="form-control" value="<?php echo $Autor['nacionalidad']; ?>" required>
            </div>
            <div class="form-group">
                <label>Distinciones:</label>
                <input type="text" name="distinciones" class="form-control" value="<?php echo $Autor['distinciones']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>

</html>