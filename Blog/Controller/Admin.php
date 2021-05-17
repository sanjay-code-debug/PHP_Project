<?php 
namespace Controller;

class Admin
{
        
    public function render(){   
        $this->renderView('header_admin');
        $this->renderView('admin_view');
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