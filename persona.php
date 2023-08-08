<?php
    //para evitar el error de CORS en el navegador
    header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
    
    include_once './services/apiPersona.php';

    $api = new ApiPersona();
    $api->getAll();
    header('Content-Type: application/json');
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