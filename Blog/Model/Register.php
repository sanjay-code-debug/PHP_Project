<?php 
namespace Model;

use Model\Database;

class Register
{
    private $conn; 
    public  function __construct(){

       $this->conn = new Database();
    } 

    public function userRegister($name,$email,$hash_password,$image){

        $conn = $this->conn->getConnection();   /**Gettinng Connection */

          $insert ="INSERT INTO user_info(Name,Email,Password,Image)values(:name,:email,:password,:folder)";
          $stmt = $conn->prepare($insert);   
          $s = $stmt->execute(array(':name'=>$name,':email'=>$email, ':password'=>$hash_password, ':folder'=>$image));

          return $s;
    }



      



}


?>