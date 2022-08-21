<?php

require_once "connection.php";

class PostModel{

    /*====================================================
    Petición POST para crear datos de forma dinámica
    =====================================================*/

    static public function postData($table, $data){

        print_r($table);
        print_r($data);
    }
    
}