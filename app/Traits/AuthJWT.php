<?php

namespace App\Traits;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

trait AuthJWT{
    private $key = SECRET_KEY;

    function generateToken(int $id, string $username) {
        $payload = [
            "data" => [
                "id" => $id,
                "username" => $username
            ],
            "exp" => strtotime("+30 minutes")
        ];

        $jwt = JWT::encode($payload, $this->key, "HS256");
        return $jwt;
    }

    function validateToken($token) {
        $validate = JWT::decode($token, new Key($this->key, "HS256"));
        return $validate;
    }
}

?>