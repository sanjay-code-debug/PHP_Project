<?php 
namespace Controller;


use Model\FetchDataHome;

class UserHome{  

   
         public function render(){   
            $this->renderView('header_user_home');
            $this->homeData();
         }
         
         public function homeData()
         {
            $object = new FetchDataHome();
            
            $data = $object->fetchData();

     echo "
            
          <div class='container'>
               <div class='row'>
                    <div class='col-md-12 col-sm-12'> 
                         <div id='main-content' class='blog-page'>
                              <div class='container'>
                              <div class='row clearfix'>
            ";


   foreach($data as $row)
   {    
     echo "        
                  <div class='col-lg-8 col-md-12 left-box'>

                      <div class='card single_post'>
                          <div class='body'>
                              <div class='img-post'>
                                  <img class='d-block img-fluid' src='".$row['Image']."' alt='First slide'>
                              </div>
        
                              <h3><a href='blog-details.html'>".$row['Title']." </a></h3>
                              <p>".$row['Description']."</p>
                          </div>
                          <div class='footer'>
                              <div class='actions'>
                                  <a href='javascript:void(0);' class='btn btn-outline-secondary'>Continue Reading</a>
                              </div>
                              <ul class='stats'>
                                  <li><a href='javascript:void(0);'>General</a></li>
                                  <li><a href='javascript:void(0);' class='fa fa-heart'>28</a></li>
                                  <li><a href='javascript:void(0);' class='fa fa-comment'>128</a></li>
                              </ul>
                          </div>
                      </div>            
                  </div>
";

}

   echo "    
        </div>
      </div>
     </div>       
    </div>     
   </div>
</div>    
";
        
}  

         public function renderView($viewFile){
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