<?php

    include_once './services/apiProyectos.php';
    
    $api = new ApiProyectos();
    $nombre = '';
    $error = '';
/*
    if(isset($_POST['nombre']) && isset($_FILES['imagen'])){

        if($api->subirImagen($_FILES['imagen'])){
            $item = array(
                'nombre' => $_POST['nombre'],
                'imagen' => $api->getImagen()
            );
            //$api->add($item);
        }else{
            $api->error('Error con el archivo: ' . $api->getError());
        }
    }else{
        $api->error('Error al llamar a la API');
    }
+/

    
?>