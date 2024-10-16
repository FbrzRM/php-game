<?php

namespace App\Models;
use App\Core\DBConnection;

class Users extends DBConnection{
    function __construct(){
        return $this->connection();
    }

    function hashPassword(string $password) : string {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    function verifyHash(string $password, string $passwordHash): string {
        return password_verify($password, $passwordHash);
    }
}

?>