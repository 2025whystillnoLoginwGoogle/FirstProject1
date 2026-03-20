<?php
require_once "../model/database.php";
require_once "../model/userModel.php";

class UserManager{

        private $userModel;
        public function __construct()
    {
            $database = new Database();
            $db = $database->connectDB();
            $this->userModel =new UserModel($db);
            }

       public function addUserFunc($firstName, $lastName){    
                try{

                if($this->userModel->createUser($firstName, $lastName)){
                    echo "New User has been added";
                }else{
                    echo "Error is acountered while adding value to the database.";
                }
                
            } catch(InvalidArgumentException $ex){
                    http_response_code(501);
                    echo $ex ->getMessage();
                    exit;
                    }
            }
           public function updateUserFunc($firstName, $lastName, $userID){ 
                try{
                    if($this->userModel->updateUser($userID, $firstName, $lastName)){
                        echo "User has been updated";
                    }else{
                        echo "Error is encountered while updating value to the database";
                    }
                }catch(PDOException $ex){
                    http_response_code(501);
                    echo $ex ->getMessage();
                    exit;
                }
            }
           public function deleteUserFunc($userID){ //FIX THIS HAHA TANGINA KASI AMBILIS
                try{
                    if($this->userModel->deleteUser($userID)){
                        echo "User has been deleted";
                    }else{
                        echo "Error is encountered while deleting value to the database";
                    }
                }catch(PDOException $ex){
                    http_response_code(501);
                    echo $ex ->getMessage();
                    exit;
                }
            }

            public function getUser(){
              $response = $this->userModel->readUser();
              return $response->fetchAll(PDO::FETCH_ASSOC);
            }
            public function loginUserFunc($fName, $lName){
                $fNameColumn = array_column($_SESSION["userArray"], column_key:"FirstName");
                $fNameResult = array_search($fName, $fNameColumn);

                $lNameColumn = array_column($_SESSION["userArray"], column_key:"LastName");
                $lNameResult = array_search($lName, $lNameColumn);

                if($fNameResult != false && $lNameResult != false){
                    echo true;
                }else {
                    echo false;
                }
            }
    }


?>