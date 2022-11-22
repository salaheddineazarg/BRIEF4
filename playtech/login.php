

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive.css">
  <!-- JavaScript Bundle with Popper -->
  <script defer src="js.js"></script>


  <title>PLAYTECH</title>
</head>
  
<body>

  <nav id="navbar" class="navbar nav navbar-expand-lg bg-light">
    <div class="container-fluid">
      <img class="logo" src="image/logo.png" alt="">
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon togle"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto navlist mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link list active" aria-current="page" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link list" href="shop.php">GALLERY</a>
          </li>
          <span class="nav-item login">
            <svg class="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path
                d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
            </svg>
            <a onclick="sign();" class="list" >SIGN UP</a>
          </span>
        </ul>

      </div>
    </div>
  </nav>
  <!-- second nav -->
  <nav id="navbar" class="navbar nav2 navbar-expand-lg bg-light">
    <div class="container-fluid">
      <img class="logo" src="image/logo.png" alt="">
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon togle"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto navlist mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link list active" aria-current="page" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link list" href="shop.php">GALLERY</a>
          </li>
          <span class="nav-item login">
            <svg class="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path
                d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
            </svg>
            <a onclick="login();" class="list" >LOGIN</a>
          </span>
        </ul>

      </div>
    </div>
  </nav>

  <!-- end nav -->
<video id="videocover" class="vidlogin" src="videos/coverlogin.mp4" autoplay  loop></video>




<?php include 'formlogin.php'; 


?>








</body>
</html>
