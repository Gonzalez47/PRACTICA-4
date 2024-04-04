<?php
    require_once "lib/nusoap.php";
    function getFrutas($datos) {
        if ($datos == "Frutas") {
            return join(",", array(
                "Manzana",
                "Sandía",
                "Naranja",
                "Mango",
                "Melón",
                "Pera",
                "Toronja",
                "Piña",
                "Durazno",
                "Uva"));
            }
            else {
                return "No hay frutas";
        }
    }
    $server = new soap_server(); //Instancia de SOAP
    $server->register("getFrutas"); //Indica el metodo o funcion a devolver 
    if ( !isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA =file_get_contents('php://input');
        $server->service($HTTP_RAW_POST_DATA);
?> 




