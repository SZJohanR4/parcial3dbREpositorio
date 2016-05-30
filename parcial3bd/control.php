<?php

include 'dataBase.php';
if (isset($_POST['buscar'])) {
    $db = new Database();
    $db->conectar();
    $busqueda = $_POST['entradaI'];
    //mira si el string tiene un / si tiene un / lo parte y lo manda a consultas avansadas si no lo manda a una consultas normal
    for ($i = 0; $i < strlen($busqueda); $i++) {
        if ($busqueda[$i] == "/") {
           //parte el string en dos uno que es la consulta como tal, y el otro es el numero/id que se nesesite
            $arrayConsulta = explode("/", $busqueda,2);
            $consulta = $arrayConsulta[0];
            $numero = $arrayConsulta[1];
            
            //consultas avanzadas
//aqui entra si es nesesario hacer una consulta cuando le dan un valor
            if ($busqueda == "lista de puntos valorados por el usuario/$numero") {
                echo" ENTRA AQUI Y ME TRAE EL VALOR DEL $numero";
                $result = $db->prueba();
                header("Location: index.php?resultado=$result");
            }

            if ($busqueda == "lista de puntos con un IB dado/$numero") {
                $result = $db->prueba();
                header("Location: index.php?resultado=$result");
            }
            
            
        } else {
            //consultas normales
//entra cuando es una consulta simple 
            if ($busqueda == "lista puntos valorados") {
                echo" ENTRA AQUI";
                $result = $db->prueba();
                header("Location: index.php?resultado=$result");
            }

            if ($busqueda == "lista de usuarios que no ha valorado") {
                $result = $db->prueba();
                header("Location: index.php?resultado=$result");
            }

            if ($busqueda == "lista de puntos con sus respectivos usuarios") {
                $result = $db->prueba();
                header("Location: index.php?resultado=$result");
            }
            if ($busqueda == "lista de puntos con sus respectivos usuarios") {
                $result = $db->prueba();
                header("Location: index.php?resultado=$result");
            }
        }
    }




   


//
}

