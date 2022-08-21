<?php

//print_r ($_SERVER['REQUEST_URI']);

$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);

//Cuando no se hace una peticion a la API

if(count($routesArray)==0)
{
    $json = array(
        'status' => '404',
        'result' => 'Not found',
    );
    
    echo json_encode($json, http_response_code($json["status"]));
    
    return;
    
}

//Cuando se hace una petición a la API

if(count($routesArray)==1 && isset($_SERVER['REQUEST_METHOD'])){
    //print_r($_SERVER['REQUEST_METHOD']);

    //Solicitud GET

    if($_SERVER['REQUEST_METHOD']=="GET"){

        include "services/get.php";
    }

    //Solicitud POST

    if($_SERVER['REQUEST_METHOD']=="POST"){

        include "services/post.php";

    //Solicitud PUT

    if($_SERVER['REQUEST_METHOD']=="PUT"){

        $json = array(
            'status' => '200',
            'result' => 'PUT',
        );

        echo json_encode($json, http_response_code($json["status"]));
    }

    //Solicitud DELETE

    if($_SERVER['REQUEST_METHOD']=="DELETE"){

        $json = array(
            'status' => '200',
            'result' => 'DELETE',
        );

        echo json_encode($json, http_response_code($json["status"]));
    }
}


