<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
<nav id="navbar" class="navbar nav navbar-expand-lg bg-light">
        <div class="container-fluid">
            <img class="logo" src="image/logo.png" alt="">
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
    </nav>


      <?php

      include 'meesge.php';

if(isset($_POST['hidden1']) and $_POST['hidden1']!=1 ){
  $idccati=$_POST['hidden1'];
  $data = mysqli_query($conn, "SELECT * FROM `product`WHERE `id_c`=$idccati");

}else{
  $data = mysqli_query($conn, "SELECT * FROM `product`WHERE  1" );
}

 

  $dataca = mysqli_query($conn, "SELECT * FROM `category` WHERE 1");
  ?>
  <form name="myForm" id="myForm" action=""  method="POST">
    <input type="hidden"  name="hidden1" id="hidden1" />
</form>
  <div class="contt">
    <div class="continer_cards row">
      <?php
      foreach ($data as $row) {
      ?>
        <div class="card" style="width: 18rem;">
          <img id="myimg" src="img/<?php echo $row['image']; ?>" class="card-img-top" alt="">
          <div class="card-body">
            <div class="prix_titile"> <h5 class="card-title"><?php echo $row['name'] ?></h5> <h5 class="card-title"><?php echo $row['prix']  ?>DH</h5> </div>
           

            <p class="card-text"> <?php echo $row['description']; ?></p>
          </div>
          <div class="card-body">
            <a href="update_P.php?id=<?php echo $row['id'] ?>" class="card-link">update</a>
            <a href="delete.php?id=<?php echo $row['id'] ?>" class="card-link">Delete</a>
          </div>            
        </div>
      <?php
      }
      ?>
    </div>
    <div id="category">
      <ul class="nav  flex-column ">
        <li class="nav-item">
          <a class="nav-link" active aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
       
          <a class="nav-link" href="#">play</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addpro.php">add Profact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item">
          <select   onchange=" submit()" name="selectca" id="c_product">
          <option value="1"> all prodact</option>
            <?php
            foreach ($dataca as  $row) {
              
            ?>

              <option <?php if(isset($_POST['hidden1'])){ if($row['id_c']==$_POST['hidden1']){echo "selected";} }?>  value="<?php echo $row['id_c']; ?>"><?php echo $row['name']; ?></option>
            <?php
            }
            ?>
                
          </select>
        </li>
      </ul>
    </div>
  </div>






  <script>
    function submit() {

    
 const c = document.getElementById("c_product").value;


    
      //  const path = " data.php/?id=" + e.target.value
      //  window.location.assign(path);
      document.getElementById('hidden1').value =c;
        document.getElementById('myForm').submit();
       
        
        
    
    }
  </script>
  <script>

  </script>
  
</body>

</html>