<?php

/**
 * Declaration of Controllers For Furthur Use  
 */
use Controller\Login;
use Controller\Signup;
use Controller\HomePage;
use Controller\UserRegister;
use Controller\VerifyLogin;
use Controller\UserHome;
use Controller\Post;
use Controller\Logout;
use Controller\Admin;
use Controller\AddPost;


/**
 *   getUrl() is a Global Method is used to Get URL(Only get this Current Base URL ) e.g - http://localhost/Blog
 */

 function getUrl(){
     return sprintf(
         "%s://%s%s",
         isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
         $_SERVER['SERVER_NAME'],
         explode('/index.php', $_SERVER['SCRIPT_NAME'])[0]);
    }

/**
 * 
 * renderRoute()  ------>  Routing Sytem For all the Pages 
 * 
 */
 
  function renderRoute() {

      $request = $_SERVER['REQUEST_URI']; //to get current url
      $basePath = explode('/index.php', $_SERVER['SCRIPT_NAME'])[0]|'';

      if($basePath.'/'===$request ){ 
        $controller=new HomePage();
        $controller->render();  
      } 

      else if($basePath.'/login'===$request){
              $controller=new Login();
              $controller->render();      
      } 

      else if($basePath.'/sign-up'===$request){
             $controller=new Signup();
             $controller->render();      
      } 

      else if($basePath.'/user-register'===$request){
          $controller=new UserRegister();
          $controller->render();      
      } 

      else if($basePath.'/user-home'===$request){
        $controller=new UserHome();
        $controller->render();      
      } 
       
      else if($basePath.'/verify-admin'===$request){
        $controller=new Admin();
        $controller->render();
      }  

      else if($basePath.'/verify-login'===$request){
        $controller=new VerifyLogin();
        $controller->render();
      }  

      else if($basePath.'/post'===$request){
        $controller=new Post();
        $controller->render();      
      } 


      else if($basePath.'/add-post'===$request){
        $controller=new AddPost();
        $controller->render();
      }  


      else if($basePath.'/logout'===$request){
        $controller=new Logout();
        $controller->logout();      
      } 

        
      else if($basePath.'/approve'===$request){
        $controller=new Approve();
        $controller->logout();      
      } 


      else{
        //  Not Found Page 
          echo  '404 Page Not Found';     
      } 
  }


  function autoloader(){
        /**
         * Autoload the Classes with Namespace
         */
        spl_autoload_register(function ($className) {

            # DIRECTORY SEPARATORS varies in various platforms
            $ds = DIRECTORY_SEPARATOR;

            # Current Working Directory
            $dir = __DIR__;

            define ('SITE_ROOT', realpath(dirname(__FILE__)));
            # replace namespace separator with directory separator (prolly not required)
            $className = str_replace('\\', $ds, $className);

            # get full name of file containing the required class
            $file = "{$dir}{$ds}{$className}.php";

            # get file if it is readable
            if (is_readable($file)) {
                require_once $file;
            }
        });
    }

    autoloader();
    renderRoute();  

  ?>



