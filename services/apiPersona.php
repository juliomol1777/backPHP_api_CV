<?php

include_once './DAO/personaDao.php';

class ApiPersona{

    private $error;
    private $imagen;


    function getAll(){
        $persona = new Persona();
        $lista = array();
        //$lista["items"] = array();

        $res = $persona->obtenerPersona();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "id" => $row['id'],
                    "about" => $row['about'],
                    "email" => $row['email'],
                    "fullname" => $row['fullname'],
                    "image" => $row['image'],
                    "image_background" => $row['image_background'],
                    "position" => $row['position'],
                    "ubication" => $row['ubication'],
                    "url_github" => $row['url_github'],
                    "url_in" => $row['url_in'],
                );

                //array_push($lista["items"], $item);
                array_push($lista, $item);
            }
        
            $this->printJSON($lista);
        }else{
            $this->error('No hay elementos');
        }
    }
    
    function error($mensaje){
        echo '<code>' . json_encode(array('mensaje' => $mensaje)) . '</code>'; 
    }

    function exito($mensaje){
        echo '<code>' . json_encode(array('mensaje' => $mensaje)) . '</code>'; 
    }

    function printJSON($array){
        //echo '<code>'.json_encode($array).'</code>';
        echo json_encode($array);
    }

    
    function getImagen(){
        return $this->imagen;
    }

    function getError(){
        return $this->error;
    }

    /*
    function getById($id){
        $proyecto = new Proyectos();
        $proyectos = array();
        $proyectos["items"] = array();

        $res = $proyecto->obtenerProyectos($id);

        if($res->rowCount() == 1){
            $row = $res->fetch();
        
            $item=array(
                    "id" => $row['id'],
                    "image" => $row['image'],
                    "info" => $row['info'],
                    "name" => $row['name'],
                );
            array_push($proyectos["items"], $item);
            $this->printJSON($proyectos);
        }else{
            $this->error('No hay elementos');
        }
    }

    function add($item){
        $pelicula = new Proyectos();

        $res = $proyecto->nuevoProyecto($item);
        $this->exito('Nueva pelicula registrada');
    }



    function subirImagen($file){
        $directorio = "imagenes/";

        $this->imagen = basename($file["name"]);
        $archivo = $directorio . basename($file["name"]);

        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    
        // valida que es imagen
        $checarSiImagen = getimagesize($file["tmp_name"]);

        if($checarSiImagen != false){
            //validando tamaño del archivo
            $size = $file["size"];

            if($size > 500000){
                $this->error = "El archivo tiene que ser menor a 500kb";
                return false;
            }else{

                //validar tipo de imagen
                if($tipoArchivo == "jpg" || $tipoArchivo == "jpeg"){
                    // se validó el archivo correctamente
                    if(move_uploaded_file($file["tmp_name"], $archivo)){
                        //echo "El archivo se subió correctamente";
                        return true;
                    }else{
                        $this->error = "Hubo un error en la subida del archivo";
                        return false;
                    }
                }else{
                    $this->error = "Solo se admiten archivos jpg/jpeg";
                    return false;
                }
            }
        }else{
            $this->error = "El documento no es una imagen";
            return false;
        }
    }
*/
}

?>