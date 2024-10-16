<?php

namespace App\Traits;

trait Response{
    function json($data){
        header("Content-Type: application/json");
        return json_encode($data, true);
    }
}

?>