<?php
class autorView {
    public function mostrarAutores($autores) {
        foreach ($autores as $autor) {
            echo "ID: " . $autor['id'] . "<br>";
            echo "Nombre: " . $autor['nombre_completo'] . "<br>";
            echo "Nacionalidad: " . $autor['nacionalidad'] . "<br>";
            echo "Distinciones: " . $autor['distinciones'] . "<br>";
            echo "<br>";
        }
    }

    public function mostrarMensaje($mensaje) {
        echo $mensaje;
    }
}
