<?php

require_once "connection.php";

class PutModel{

    /*====================================================
    Petición PUT para editar datos de forma dinámica
    =====================================================*/

    static public function putData($table, $data, $id, $nameId){

        $set = "";

        foreach($data as $key => $value){
            $set .= $key.' = :'.$key.",";
        }

        $set = substr($set,0,-1);
        
        $sql = "UPDATE $table SET $set WHERE $nameId = :$nameId";

        $link = Connection::connect();
        $stmt = $link->prepare($sql);

        foreach ($data as $key => $value){

            $stmt->bindParam(":".$key, $data[$key], PDO::PARAM_STR);
        } 

        $stmt->bindParam(":".$nameId, $id, PDO::PARAM_STR);

        //print_r($stmt); return;

        if($stmt->execute()){
            $response = array(
                "comment" => "The process was successful"
            );
            return $response;
        }  

        else{
            return $link->errorInfo();
        }

    }
}