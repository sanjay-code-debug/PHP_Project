<?php 
namespace Model;

use Model\Database;

class AddBlog
{
    private $conn; 
    public  function __construct(){

       $this->conn = new Database();
    } 

    public function addBlog($title,$desc,$image){

        $conn = $this->conn->getConnection();   /**Gettinng Connection */

          $insert ="INSERT INTO blog_post(Title,Description,Image)values(:title,:desc,:image)";
          $stmt = $conn->prepare($insert);   
          $s = $stmt->execute(array(':title'=>$title,':desc'=>$desc,':image'=>$image));
          return $s;
    }
}

?>