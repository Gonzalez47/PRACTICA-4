<?php
require_once "lib/nusoap.php";
$cliente = new nusoap_client("http://localhost/practica4mga/server.php");

$error = $cliente->getError();
if ($error) {
    echo "<h2>Constructor error<h2><pre>" . $error . "</pre>";
}
$result = $cliente->call("getFrutas",array("datos" => "Frutas"));
if ($cliente->fault) { //se checa por si hay una falla al momento de llamar al metodo
    echo "<h2>Fault<h2><pre>";
    print-r($result);
    echo "</pre";
}
else { //No hay error al llamar el metodo
    $error = $cliente->getError();
    if ($error){
        echo "<h2>Error</h2><pre>" . $error . "</pre>";
    }
    else{
        echo "<span style= 'color: purple;'><h2>FRUTAS</h2></span><pre>";
        echo $result;
        echo "</pre>";
    }
}
?>