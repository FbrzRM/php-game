<?php

namespace App\Controllers;
use App\Models\Users;
use App\Traits\{Request, Response};

class AuthController{
    use Request, Response;
    function register(){
        $user = new Users;
        $request = $this->body();

        $request["password"] = $user -> hashPassword($request["password"]);

        // print_r($request);
        // echo gettype($request);

        $userSaved = $user->createAccount($request);
        return $this->json($userSaved);
    }

    function signIn(){
        $user = new Users();
        $request = $this->body();

        $username = $user->validateUserForLogin($request["username"]);
        if(!$user -> verifyHash($request["password"], $username["password"])) return "Las contraseñas no coinciden";
        return $this->json($username);

    }
}


?>