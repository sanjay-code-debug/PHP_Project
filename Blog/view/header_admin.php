
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>User Dashboard </title>

   
  <!-- Css File Link  -->
    <link rel="stylesheet" href="<?=getUrl()."/public/css/user_home.css"?>">    
    <link rel="stylesheet" href="<?=getUrl()."/public/css/add_post.css"?>">
  <!-- Js File Link  -->
    <script src="<?=getUrl()."/public/js/add_post_script.js"?>"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!--  -->
   <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

   <!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

   <!-- <script src="https://kit.fontawesome.com/20e6513a25.js" crossorigin="anonymous"></script> -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

</head>

  <body>


<!-- Header Start -->
<!-- Navbar Design Start -->
    
  <nav class="navbar fixed-top navbar-expand-lg navbar-light btn-secondary position-sticky " >
        <a class="navbar-brand" href="#">CODILAR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav w-100">
                <li class="nav-item active">
                    <a class="nav-link" href="<?=getUrl().'/verify-admin'?>"> <h4>Home</h4> </a>
                    <!-- <button type="button" class="btn btn-secondary"><h1></h1></button> -->
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#"><h4>Blogs</h4></a>
                </li>


                <li class="nav-item dropdown ml-auto">
                    <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown link </a> -->
        
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="images/img1.jpg" width="40" height="40" class="rounded-circle">
                      </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">View</a>
                        <a class="dropdown-item" href="<?=getUrl()."/post"?>">Add Blog</a>
                        <div class="dropdown-divider bg-primary"></div>
                        <a class="dropdown-item" href="<?=getUrl()."/logout"?>">Signout</a>
                    </div>

                </li>
            </ul>

        </div>
    </nav>

<!-- Navbar End  -->
<!-- Heade End   -->
