<!DOCTYPE html>
<html>

<head>
    <title>Crear Autor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2 class="mt-4 mb-4">Crear Autor</h2>
        <form action="create_process.php" method="POST">
            <div class="form-group">
                <label>Nombre completo:</label>
                <input type="text" name="nombre_completo" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nacionalidad:</label>
                <input type="text" name="nacionalidad" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Distinciones:</label>
                <input type="text" name="distinciones" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
</body>

</html>