<?php

namespace App\Traits;

trait Request{
    public $headers;
    public $body;

    function __construct(){
        $this->headers = getallheaders();
        $this->body = json_decode(file_get_contents('php://input'), true);
    }

    function body(){
        $this->headers;
        return $this->body;
    }
}

?>