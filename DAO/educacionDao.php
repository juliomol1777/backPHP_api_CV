<?php

include_once './config/db.php';

class Educacion extends DB{
    
    function obtenerEducacion(){
        $query = $this->connect()->query('SELECT * FROM educacion');
        return $query;
    }
/*
    function obtenerEducacion($id){
        $query = $this->connect()->prepare('SELECT * FROM educacion WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query;
    }

    function nuevoEducacion($eduacion){
        $query = $this->connect()->prepare('INSERT INTO educacion (image, info, name) VALUES (:image, :info, :name)');
        $query->execute(['image' => $proyecto['image'], 'info' => $proyecto['info'], 'name' => $proyecto['name']]);
        return $query;
    }
*/
}

?>