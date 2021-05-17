<?php 
namespace Controller;

use Model\Register;

class UserRegister
{
    public function render()
    {
        if (isset($_POST['signup']) && isset($_FILES['uploadfile'])) {
            $name      = $_POST['name'];
            $email     = $_POST['email'];
            $password  = $_POST['password'];
            $hash_password = password_hash($password, PASSWORD_DEFAULT);



            $filename = $_FILES['uploadfile']['name'];
            $filetemp = $_FILES['uploadfile']['tmp_name'];


            $filedivide = explode('.', $filename);
            $filelowertext = strtolower(end($filedivide));
            $file_array = array('jpg', 'png', 'jpeg');

            if (in_array($filelowertext, $file_array)) {


                $folder  = getUrl().'/public/images/'.$filename;
                // echo $name,$email,$hash_password;
                // echo $folder;
                // die('');
                
                move_uploaded_file($filetemp, SITE_ROOT.'/public/images/'.$filename);
      
        
                $userObject= new Register();
                $isUser = $userObject->userRegister($name,$email,$hash_password,$folder);

                /* * */
                if ($isUser) {
                    // echo  'Your Account Is Created ! Wait For Admin Approval';
                    header("Location: ".getUrl()."/sign-up");
                } 
                else {
                    header("Location: ".getUrl()."/");
                }
            }

            else{
                header("Location: ".getUrl()."/");
            }
        }
    }
}
    
      




?>