<?php

namespace App\Controllers;
use App\Models\User;
use App\Traits\{Request, Response, AuthJWT};

class AuthController{
    use Request, Response, AuthJWT;
    function register(){
        $user = new User;
        $request = $this->body();

        $request["password"] = $user -> hashPassword($request["password"]);

        // print_r($request);
        // echo gettype($request);

        $userSaved = $user->createAccount($request);
        return $this->json($userSaved);
    }

    function signIn(){
        $user = new User();
        $request = $this->body();

        $username = $user->validateUserForLogin($request["username"]);
        if(!$user -> verifyHash($request["password"], $username["password"])) return "Las contraseñas no coinciden";

        $token = $this->generateToken($username["id"], $username["username"]);
        $this->headerSend($username, 200, ["auth-token"=> $token]);
        return $this->json(["message" => "usuario inicio de sesión - correcto"]);

    }
}


?>