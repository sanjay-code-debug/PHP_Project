<?php 
namespace Controller;

use Model\AddBlog;

class AddPost
{
    public function render()
    {
        if (isset($_POST['post']) && isset($_FILES['uploadfile'])) {
            $title      = $_POST['name'];
            $desc   = $_POST['textarea'];

            $filename = $_FILES['uploadfile']['name'];
            $filetemp = $_FILES['uploadfile']['tmp_name'];


            $filedivide = explode('.', $filename);
            $filelowertext = strtolower(end($filedivide));
            $file_array = array('jpg', 'png', 'jpeg');

            if (in_array($filelowertext, $file_array)) {


                $folder  = getUrl().'/public/images/'.$filename;
                
                move_uploaded_file($filetemp, SITE_ROOT.'/public/images/'.$filename);
        
                $userObject= new AddBlog();
                $blogAdd = $userObject->addBlog($title,$desc,$folder);

                /* * */
                if ($blogAdd) {
                    // echo  'Your Account Is Created ! Wait For Admin Approval';
                    header("Location: ".getUrl()."/user-home");
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