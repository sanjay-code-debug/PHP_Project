<?php 
namespace Controller;

use Model\User;

class VerifyLogin {

            
      public function render(){

        $this->renderView('Session');

           if (isset($_POST['login'])) {
               $email    = $_POST['email'];
               $password = $_POST['password'];
                             
               $userObject = new User();
           

               $isAdmin = $userObject->verifyAdmin($email,$password);

               if($isAdmin)
               {
                foreach ($isAdmin as $row) {
                  $email= $row['Email'];
                 }
                 $_SESSION['Email']=$email;
                 header("Location: ".getUrl()."/verify-admin");
               }
               else
               {
                   $isUser = $userObject->userVerifyLogin($email);

                   foreach ($isUser as $row) {
                       $id = $row['Id'];
                       $hashed_password = $row['Password'];
                       $email1= $row['Email'];
                   }

                   if (password_verify($password, $hashed_password)) {
                       $_SESSION['Id']=$id;
                       $_SESSION['Email']=$email1;
                       header("Location: ".getUrl()."/user-home");
                   } else {
                       header("Location: ".getUrl()."/");
                   }
               }

             }
           
           else{
            header("Location: ".getUrl()."/");  
           }


             
      }

      
      public function renderView($viewFile){
        # DIRECTORY SEPARATORS varies in various platforms
        $ds = DIRECTORY_SEPARATOR;

        # Root Directory of Project
        $dir =explode('/index.php',$_SERVER['SCRIPT_FILENAME'])[0];

        # replace namespace separator with directory separator (prolly not required)
        
        # get full name of file containing the required class
        $file = "{$dir}{$ds}Model{$ds}{$viewFile}.php";
         
         # get file if it is readable
         if (is_readable($file)) {
             require_once $file; 
          }
       }
    }
?>