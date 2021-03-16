<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="keyword" content="Auto-care,car servicing maintenance and repair, order and book to fix appointments">
  <meta name="description" content="Auto-care,car servicing maintenance and repairs,  its a platform where people can book appointments to fix and service their cars anytime anywhere">
  <meta name="author" content="Ogundele babatunde Stephen">
  <title>Auto-care | Home</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="icons/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="main.css">
  <script src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
        <!--nav-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><b>AUTO-CARE</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto ml-5 mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link  active px-4" aria-current="page" href="home.php">Home</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link nav-color px-4" href="#">admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-color px-4 " href="tech_login.php">login</a><!--support-->
            </li>
            
          </ul>


        <a href="#"><i class="fab fa-facebook  ml-md-5 nav-color px-md-3 "></i></a>
        <a href="#"><i class="fab fa-twitter nav-color px-md-2 "></i></a>
        <a href="#"><i class="fab fa-instagram  px-md-2 nav-color"></i></a>
      
        </div>


    </nav>
    <div class="container-fluid mx-0 px-0">
      <div class="row">
        <div class="col-6 mx-0 px-0 h-100">
          <img src="images/span.jpeg" class="img-fluid col mx-0 pr-0 h-100" style="border:2px solid #0F163F;" >
        </div>
        <div class="col-6 nav-bg   ">
          <h4 class="display-4 text-light ml-5 text-center mt-4">Repair & earn with</h4><h3 class="display-4 mt-2 mb-3 ml-5 text-center text-light font-weight-bolder">AUTO-CARE.</h3>
          
            <br><br>
             <form action="tech_submit.php" class="text-center" method="POST" >
            <input type="text" name="fname" class="col col-md-6 mb-2 form-control border-primary mx-auto " id="" value="" placeholder="First name" required="">
            <input type="text" name="lname" class="col col-md-6 mb-2 form-control border-primary mx-auto " id="" value="" placeholder="Last name" required="">

            <input type="email" name="email" id="" class="col col-md-6 mb-2 border-primary mx-auto form-control" value="" placeholder="www.example@gmail.com" required="">

            <input type="password" name="pwd" class="col col-md-6 mb-2 form-control border-primary mx-auto " id="" value="" placeholder="password" required="">

            <input type="text" name="phone" class="col col-md-6 mb-2 form-control border-primary mx-auto " id="" value="" placeholder="+234.." required="">

            
            <div class="submit"  >
            <button type="submit" id="signin" class="mb-2 btn- submit col form-control  col-md-6 col btn text-light  " >Sign up</button>
      
            <p class="text-center text-white">Already have an account Please? <a href="tech_login.php">Login</a></p>
            </div>
            
      </div>
    </div>