<?php

namespace App\Core;

use PDO;

class DBConnection{
    protected $db_host = DB_HOST;
    protected $db_user = DB_USER;
    protected $db_password = DB_PASSWORD;
    protected $db_name = DB_NAME;

    protected $connect;

    function connection() {

        try {
            $pdo = "mysql:dbname={$this->db_name}; host={$this->db_host}";
            $opt =[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];

            $this->connect = new PDO($pdo, $this->db_user, $this->db_password, $opt);
            return $this->connect;
        } catch (PDOException $e) {
            echo "Error {$e->getMessage()} <br/>";
            echo "Error in line {$e->getLine()} <br/>";
        }
    }

    function createAccount($data){
        $sql = "INSERT INTO Users (username, password, email, first_name, last_name, role)
        VALUES (:username, :password, :email, :first_name, :last_name, :role)";

        $query = $this->connection()->prepare($sql);

        $query->bindParam(":username", $data["username"]);
        $query->bindParam(":password", $data["password"]);
        $query->bindParam(":email", $data["email"]);
        $query->bindParam(":first_name", $data["first_name"]);
        $query->bindParam(":last_name", $data["last_name"]);
        $query->bindParam(":role", $data["role"]);

        $query->execute();

        $user_id = $this->connect->lastInsertId();
        return $user_id;
    }

    function validateUserForLogin( $username){
        $sql = "SELECT * FROM users WHERE username = :username";

        $query = $this->connection()->prepare($sql);

        $query-> bindParam(":username", $username);
        $query->execute();

        $rows =  $query-> fetch(PDO::PARAM_STR);
        return $rows;
    }

    function allUsers() {
        $sql = "SELECT * FROM users";
        $query = $this->connection()->prepare($sql);
        $query->execute();

        $row = $query->fetchAll(PDO::PARAM_STR);
        return $row;
    }
}

?>