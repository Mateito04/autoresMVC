<?php
class AutorModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAutores() {
        $query = "SELECT * FROM autores";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAutorById($id) {
        $query = "SELECT * FROM autores WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function crearAutor($nombre_completo,$nacionalidad,$distinciones) {
        $query = "INSERT INTO autores (nombre_completo,nacionalidad,distinciones) 
                  VALUES (:nombre_completo,:nacionalidad,:distinciones)";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':nombre_completo', $nombre_completo, PDO::PARAM_STR);
        $statement->bindParam(':nacionalidad', $nacionalidad, PDO::PARAM_STR);
        $statement->bindParam(':distinciones', $distinciones, PDO::PARAM_STR);
        $statement->execute();
        return $this->db->lastInsertId();
    }

    public function actualizarAutor($id, $nombre_completo,$nacionalidad,$distinciones) {
        $query = "UPDATE autores SET nombre_completo = :nombre_completo, nacionalidad = :nacionalidad, distinciones = :distinciones 
                  WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':nombre_completo', $nombre_completo, PDO::PARAM_STR);
        $statement->bindParam(':nacionalidad', $nacionalidad, PDO::PARAM_STR);
        $statement->bindParam(':distinciones', $distinciones, PDO::PARAM_STR);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        return $statement->execute();
    }

    public function eliminarAutor($id) {
        $query = "DELETE FROM autores WHERE id = :id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        return $statement->execute();
    }
}
