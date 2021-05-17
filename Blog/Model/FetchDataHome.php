<?php 
namespace Model;

use Model\Database;

class FetchDataHome
{
    private $conn; 
    public  function __construct(){

       $this->conn = new Database();
    } 

    public function fetchData(){

        $conn = $this->conn->getConnection();   /**Gettinng Connection */

          $insert ="SELECT *FROM blog_post";
          $stmt = $conn->prepare($insert);   
          $stmt->execute();
          $result = $stmt->fetchAll();

          return $result;
    }



      



}


?>