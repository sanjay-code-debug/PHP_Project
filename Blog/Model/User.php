<?php
namespace Model;

use Model\Database;

class User
{
    private $conn;
    public function __construct()
    {

        $this->conn = new Database();
    }

    public function userVerifyLogin($email)
    {

        $conn = $this->conn->getConnection(); /**Gettinng Connection */
        // $stmt = $conn->prepare("SELECT  *FROM user_info where Is_approved='0' and email='".$email."' and password='".$password."' ");
        $stmt = $conn->prepare(" SELECT *FROM user_info where  email='" . $email . "' ");
        $stmt->execute();
        $s = $stmt->fetchAll();
        // var_dump($s);
        // die('');

        return $s;
    }

}
