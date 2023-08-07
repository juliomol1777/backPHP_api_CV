<?php

include_once './config/db.php';

class Persona extends DB{
    
    function obtenerPersona(){
        $query = $this->connect()->query('SELECT * FROM persona');
        return $query;
    }
/*
    function obtenerProyectos($id){
        $query = $this->connect()->prepare('SELECT * FROM proyectos WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query;
    }

    function nuevoProyecto($proyecto){
        $query = $this->connect()->prepare('INSERT INTO proyectos (image, info, name) VALUES (:image, :info, :name)');
        $query->execute(['image' => $proyecto['image'], 'info' => $proyecto['info'], 'name' => $proyecto['name']]);
        return $query;
    }
*/
}

?>