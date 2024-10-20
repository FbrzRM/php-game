<?php

namespace App\Controllers;
use App\Models\User;

use App\Traits\{Request, Response, AuthJWT};

class UserController{

    use Request, Response, AuthJWT;

    function all() {

        $token = $this->headers["auth-token"];
        if(!$token) return "Usuario no autorizado";

        $validate = $this->validateToken($token);

        $user = new User;
        $userResult = $user->allUsers();
        return $this->json($userResult);
    }
}

?>