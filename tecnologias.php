<?php
    include_once './services/apiTecnologias.php';

    $api = new ApiTecnologias();
    $api->getAll();
/*
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        if(is_numeric($id)){
            $api->getById($id);
        }else{
            $api->error('El id es incorrecto');
        }
    }else{
        $api->getAll();
    }
    */
?>