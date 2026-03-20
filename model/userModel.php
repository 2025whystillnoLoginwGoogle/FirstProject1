<?php

    class UserModel{

        private $conn;

        public function __construct($db){
            $this->conn = $db;
        }

        public function createUser($fName, $lName){
            $insertQuery = "INSERT INTO tbl_users(firstName, lastName, createdAt, updatedAt) VALUES (::firstName, :lastName, :createdAt, :updatedAt)";

            $dateNow = date(format: 'Y-m-d H:i:s');
            $response = $this->conn->prepare($insertQuery);
            $response->bindParam(":firstName", $fName);
            $response->bindParam(":lastName", $lName);
            $response->bindParam(":createdAt", $dateNow);
            $response->bindParam(":updatedAt", $dateNow);

            return $response->execute();
            
        }


    }






?>
