<?php

namespace App\Traits;

trait Response{
    function json($data){
        header("Content-Type: application/json");
        return json_encode($data, true);
    }

    function headerSend($data, $status = 200, $headers = []){
        http_response_code($status);

        foreach ($headers as $key => $value) {
            header("$key: $value");
        }

        return json_encode($data);
    }
}

?>