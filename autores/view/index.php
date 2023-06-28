<?php
require_once '../controller/AutorController.php';
require_once 'AutorView.php';

$controller = new AutorController();
$view = new AutorView();

// Obtener todos los Autores
$Autores = $controller->getAutores();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lista de Autores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-4 mb-4">Lista de Autores</h2>
        <a href="create.php" class="btn btn-primary mb-4">Crear Autor</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Autor</th>
                    <th>Género</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Autores as $Autor) : ?>
                    <tr>
                        <td><?php echo $Autor['id']; ?></td>
                        <td><?php echo $Autor['nombre_completo']; ?></td>
                        <td><?php echo $Autor['nacionalidad']; ?></td>
                        <td><?php echo $Autor['distinciones']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $Autor['id']; ?>" class="btn btn-sm btn-info">Editar</a>
                            <a href="delete.php?id=<?php echo $Autor['id']; ?>" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>