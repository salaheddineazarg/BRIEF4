<?php
session_start();
require 'conction.php'; 

if(isset($_POST['submit'])){
    $name=htmlspecialchars($_POST['name']);
    $prix=htmlspecialchars($_POST['prix']);
    $Category=htmlspecialchars($_POST['Category']);
    $description=htmlspecialchars($_POST['description']);
    $tmpName=$_FILES["imagee"]["tmp_name"];
    $FileName=$_FILES["imagee"]["name"];
    $imageEx=explode('.',$FileName);
    $imageEx=strtolower(end($imageEx));
    $newImageName=uniqid();
     $newImageName.='.'. $imageEx;
    move_uploaded_file($tmpName,'img/'.$newImageName);
     $proId=$_GET['id'] ;
     //$size_img=$_FILES["imagee"]["size"];
     if($_FILES['imagee']['size']>0){
        echo"ssss";
        $qury1="UPDATE `product` set `name`='$name' ,`description`='$description',`prix`=$prix,`id_c`=$Category,`image`='$newImageName'   WHERE id=$proId";

     }
     else{
        echo "mdkhlch";

        $qury1="UPDATE `product` set `name`='$name' ,`description`='$description',`prix`=$prix,`id_c`=$Category  WHERE id=$proId";

     }
   $quryrun= mysqli_query($conn,$qury1);
   if($quryrun){
     $_SESSION['messge']="Successfully updat";
     header("Location:data.php");

   }
   else{
    $_SESSION['messge']="Prodact Not  updatd";
    header("Location:data.php");
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
       <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

   <script src="js.js"></script>
     
    <title>update prodact</title>
</head>
<body class="bodyaddpro">
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
                        <!-- <svg class="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                        </svg> -->
                        <a class="list" href="data.php">GESTION
                        </a>
                    </span>
                </ul>

            </div>
        </div>
    </nav>
    <?php

    if(isset($_GET['id'])){ 
        // $proId=mysqli_real_ensca_string($con,$_GET['id']);
        $proId=$_GET['id'] ;
        $qury="SELECT * FROM `product` WHERE id=$proId";
        $dataca = mysqli_query($conn, "SELECT * FROM `category` WHERE 1");
        $qury_run=mysqli_query($conn,$qury);
        if(isset($qury_run)){
            if(mysqli_num_rows($qury_run) >0 ){
                $prodact=mysqli_fetch_array($qury_run);
                ?>
              <form class="formupdate" id="fadd" method="POST" autocomplete="off" enctype="multipart/form-data">
        <div class="input-group mb-3">
            
            <input style="font-family: inter;" name="name" type="text" value="<?php echo $prodact['name']?>" class="form-control" placeholder="name" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input name="prix" type="text"  value=<?php echo $prodact['prix']?> class="form-control" placeholder="Prix" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
            
        </div>
        <div class="input-group bg-white mb-3">
        <?php
        if(isset($_POST['sub_image'])){
            if(($_FILES['imagee']['size']>0)){     
            echo "<img id='myimg' src='img/".$newImageName."'></img>"; 
            }
            else{
                echo "<img id='myimg' src='img/".$prodact['image']."'></img>";     
            }
        } 
        else{         
            echo "<img id='myimg' src='img/".$prodact['image']."'></img>";
        } 
        ?>
             <!-- <form action="" method="post"> -->
           
          <input  accept=".jpg,jpeg,.png" style=" background-image: url( img/<?php echo $prodact['image'] ?>);" name="imagee" type="file" class="form-control imgupdate " id="basic-url"
                aria-describedby="basic-addon3">
               
                <!-- <button style="background-color:red;" name="sub_image" type="submit">chnage</button> 
                </form> -->
        </div>
   

        <div class="input-group mb-3">
           
            <select  name="Category" class="form-control" name="" id="">
                <?php
            foreach ($dataca as  $row) {
            ?>
              <option  style="font-family: inter;" <?php if($row['id_c']==$prodact['id_c']){echo "selected";} ?>  value="<?php echo $row['id_c']; ?>"><?php echo $row['name']; ?></option>
            <?php
            }
              ?>
            </select>

        </div>
        <div class="input-group">
         
            <textarea  style="font-family: inter;" name="description"  class="form-control " aria-label="With textarea"> <?php echo $prodact['description']?></textarea> <br>

        </div>
        <div id="btnadd" class="input-group">
            <button id="btnSubAdd" class="btn bg-primary submitadd btn-dark" name="submit" type="submit">Subbmit</button>
        </div>
    </form>
                <?php

            }else{
                echo "<h1> not fund id </h1>";
            }
        }
     
    } else{
        echo "Not Fuond";
    }
    ?>
 

</body>

</html>