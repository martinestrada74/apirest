<?php

require_once "connection.php";

class PutModel{

    /*====================================================
    Petición PUT para editar datos de forma dinámica
    =====================================================*/

    static public function putData($table, $data, $id, $nameId){

        print_r($id);
        print_r($nameId);
        print_r($table);
        print_r($data);

    }
}