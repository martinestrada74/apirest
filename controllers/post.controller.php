<?php

require_once "models/post.model.php";

class PostController{

    /*====================================================
    Peticiones POST para crear datos
    =====================================================*/

    static public function postData($table, $data){
        
        $response = PostModel::postData($table, $data);

        print_r($response);return;
    }
}