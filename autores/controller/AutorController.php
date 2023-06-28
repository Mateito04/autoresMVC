<?php
require '../model/AutorModel.php';

class AutorController
{
    private $model;

    public function __construct()
    {
        $db = new PDO('mysql:host=localhost;dbname=autores', 'root', 'root');
        $this->model = new AutorModel($db);
    }

    public function getAutores()
    {
        return $this->model->getAutores();
    }

    public function getAutorById($id)
    {
        return $this->model->getAutorById($id);
    }

    public function crearAutor($nombre_completo,$nacionalidad,$distinciones)
    {
        return $this->model->crearAutor($nombre_completo,$nacionalidad,$distinciones);
    }

    public function actualizarAutor($id, $nombre_completo,$nacionalidad,$distinciones)
    {
        return $this->model->actualizarAutor($id,$nombre_completo,$nacionalidad,$distinciones);
    }

    public function eliminarAutor($id)
    {
        return $this->model->eliminarAutor($id);
    }
}
