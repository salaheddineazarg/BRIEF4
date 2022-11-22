
<?php 
 require 'conction.php';
 if(isset($_POST['hidden1']) and $_POST['hidden1']!=1 ){
  $idccatii=$_POST['hidden1'];
  $queryp="SELECT * FROM `product`WHERE `id_c`= $idccatii ";
 }  
 else{
  $queryp='SELECT * FROM `product`';
 }
 $query='SELECT * FROM category ';
 $query_run=mysqli_query($conn,$query)->fetch_all(MYSQLI_ASSOC);

 $queryp_run=mysqli_query($conn,$queryp);
?>
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
    <script defer src="js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>



    <title>PLAYTECH</title>
</head>

<body>
<form name="myForm1" id="myForm1" action=""  method="POST">
    <input type="hidden"  name="hidden1" id="hidden1"/>
</form>
    <nav id="navbar" class="navbar nav navbar-expand-lg bg-light">
        <div class="container-fluid">
            <img class="logo" src="image/logo.png" alt="">
            <div class="nvb">
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="list" href="login.php">LOGIN</a>
                    </span>
                </ul>

            </div>
            </div>
        </div>
    </nav>
    <!-- end nav -->
    <div class="titregallery">
        <h1 class="playtechgallery">PLAYTECH</h1>
    
        <p class="para">lorem ipsum dolor sit amet consectetur adipisicing elit.distinctio, dolor</p>
      </div>
    <div class="vidgallery">
        <video id="video" class="videogallery" src="https://cdn2.unrealengine.com/homepage-opener-5a55a50aaa4c.mp4" autoplay loop></video>
    </div>
   
      
    <!-- les card -->
    <section class="parentgallery">
        <nav class="category">
        <input type="button"  class="names text-center" id="tt" value="TOUT CATEGORY" onclick="filter('1');" > </input>
          <?php 
          foreach($query_run as $row){
            ?>
            <input type="button"  class="names text-center" id="tt" value="<?php  echo $row['name'] ?>" onclick="filter(<?php echo $row['id_c']?>);" > </input>
            <?php
          }
          ?>
         
          <!-- <span class="names text-center"><a class="name"><b> XBOX </b></a></span>
          <span class="names text-center"><a class="name"> <b> PC GAMER</b> </a></span>
          <span class="names text-center"><a class="name1"> <b> ACCESSOIRES</b></a></span> -->
        </nav>
        <div class="child">

          <!-- CARD1 -->
          <?php 
          foreach($queryp_run as $row){
            ?>
          <div class="card cardm " style="width: 18rem;">
            <img src="img/<?php echo $row['image'] ?>" class="card-img-top imggallery  " alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['name'] ?></h5>
              <p class="card-text"><?php echo $row['description'] ?></p>
              <a href="#" class="btn ms-5 btn-primary">BUY NOW</a>
            </div>
          </div>
          <?php
          }
          ?>
          <!-- card2 -->
          <!-- <div class="card cardm" style="width: 18rem;">
            <img src="image/ps5.png" class="card-img-top  imggallery" alt="...">
            <div class="card-body">
              <h5 class="card-title">Playstation 5</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
              <a href="#" class="btn ms-5 btn-primary">BUY NOW</a>
            </div>
          </div> -->
        
        <!-- card3 -->
        <!-- <div class="card cardm" style="width: 18rem;">
          <img src="image/ps5 black.png" class="card-img-top imggallery " alt="...">
          <div class="card-body">
            <h5 class="card-title">Playstation 5</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
            <a href="#" class="btn ms-5 btn-primary">BUY NOW</a>
          </div>
        </div> -->
     <!-- ----------------------------------------------------------------------------------------- -->
       <!-- card4 -->
      <!-- <div class="card cardm" style="width: 18rem;">
        <img src="image/xbox (2).png" class="card-img-top  imggallery " alt="...">
        <div class="card-body">
          <h5 class="card-title"> WHITE XBOX</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
          <a href="#" class="btn ms-5 btn-primary">BUY NOW</a>
        </div>
      </div> -->
     
    
    <!-- Card5 -->
    <!-- <div class="card cardm" style="width: 18rem;">
      <img src="image/Xboxb.png" class="card-img-top imggallery  " alt="...">
      <div class="card-body">
        <h5 class="card-title">BLACK XBOX</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn ms-5 btn-primary">BUY NOW</a>
      </div>
    </div> -->
    <!-- CARD6 -->
    <!-- <div class="card cardm" style="width: 18rem;">
      <img src="image/pc gamer co.png" class="card-img-top imggallery  " alt="...">
      <div class="card-body">
        <h5 class="card-title">PC GAMER</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn ms-5 btn-primary">BUY NOW</a>
      </div>
    </div> -->
    <!-- --------------------------------------------------------------------------------------------------------------- -->
    <!-- CARD7 -->
   
    <!-- card8 -->
    <!-- <div class="card cardm" style="width: 18rem;">
      <img src="image/pcgamer black.png" class="card-img-top imggallery  " alt="...">
      <div class="card-body">
        <h5 class="card-title">PC GAMER</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn ms-5  btn-primary">BUY NOW</a>
      </div>
    </div> -->
    
    <!-- CARD9 -->
    <!-- <div class="card cardm" style="width: 18rem;">
      <img src="image/controllerblack.png" class="card-img-top imggallery " alt="...">
      <div class="card-body">
        <h5 class="card-title">WIRELESS CONTROLLER-BLACK </h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn ms-5 btn-primary">BUY NOW</a>
      </div>
    </div> -->
    <!-- ------------------------------------------------------------------------------------>
    <!-- CARD10 -->
    <!-- <div class="card cardm" style="width: 18rem;">
      <img src="image/controllerwhite.png" class="card-img-top  imggallery  " alt="...">
      <div class="card-body">
        <h5 class="card-title">WIRELESS CONTROLLER-WHITE </h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn ms-5 btn-primary">BUY NOW</a>
      </div>
    </div> -->
    <!-- card11 -->
    <!-- <div class="card cardm" style="width: 18rem;">
      <img src="image/headset.webp" class="card-img-top  imggallery  " alt="...">
      <div class="card-body">
        <h5 class="card-title">HEADSET</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn ms-5 btn-primary">BUY NOW</a>
      </div>
    </div> -->
    <!-- card12 -->
    <!-- <div class="card cardm" style="width: 18rem;">
      <img src="image/controllermove.png" class="card-img-top  imggallery  " alt="...">
      <div class="card-body">
        <h5 class="card-title">MOVE CONTROLLER </h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <a href="#" class="btn ms-5 btn-primary">BUY NOW</a>
      </div>
    </div> -->
    
    <!-- child -->
       </div>
       <!-- parent -->
      </section>
      <!-- footer -->

      <footer class="footer  card text-center ">
     
        <div class="imgfooter">
        <img class="logo" src="image/logo.png" alt="">
      </div>
      <div class="icons  text-center">
        <div class="fb"> 
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"/></svg>
        </div>
        <div class="twitter">
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"/></svg>
        </div>
        <div class="instagram">
          
          <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
        </div>
      </div>
      <div class="copyright ">
         <H3 style="font-family: inter;">Copyright</H3> 
      </div>
  
    

   </footer>  

</body>

</html>

