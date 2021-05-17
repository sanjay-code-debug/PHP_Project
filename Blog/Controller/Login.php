<?php 
namespace Controller;
  
class Login{  

        /**
         *   Getting login_view file from view folder here we are putiing just file name of that particular file what we need to use 
         *       
         */
         public function render(){   
            $this->renderView('header');
            $this->renderView('login_view');
         }

         public function renderView($viewFile)
         {
             # DIRECTORY SEPARATORS varies in various platforms
             $ds = DIRECTORY_SEPARATOR;
   
             # Root Directory of Project
             $dir =explode('/index.php',$_SERVER['SCRIPT_FILENAME'])[0];
   
             # replace namespace separator with directory separator (prolly not required)
             
   
             # get full name of file containing the required class
             $file = "{$dir}{$ds}view{$ds}{$viewFile}.php";
              
   
              # get file if it is readable
              if (is_readable($file)) {
               require_once $file;
           }
       }
   
}
   
?>