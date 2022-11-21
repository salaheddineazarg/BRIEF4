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
    <link rel="stylesheet" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>update prodact</title>
</head>
<body>
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
              <form id="fadd" method="POST" autocomplete="off" enctype="multipart/form-data">
        <div class="input-group mb-3">
            <span class="input-group-text"   id="basic-addon1">Name</span>
            <input name="name" type="text" value="<?php echo $prodact['name']?>" class="form-control" placeholder="name" aria-label="Username"
                aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <input name="prix" type="text"  value=<?php echo $prodact['prix']?> class="form-control" placeholder="Prix" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
            <span class="input-group-text"  id="basic-addon2">Prix</span>
        </div>
        <div class="input-group mb-3">
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
            <span class="input-group-text"  id="basic-addon3">IMAGE</span>
          <input accept=".jpg,jpeg,.png" style=" background-image: url( img/<?php echo $prodact['image'] ?>);" name="imagee" type="file" class="form-control" id="basic-url"
                aria-describedby="basic-addon3">
               
                <!-- <button style="background-color:red;" name="sub_image" type="submit">chnage</button> 
                </form> -->
        </div>
   

        <div class="input-group mb-3">
            <span class="input-group-text">category</span>
            <select name="Category" class="form-control" name="" id="">
                <?php
            foreach ($dataca as  $row) {
            ?>
              <option <?php if($row['id_c']==$prodact['id_c']){echo "selected";} ?>  value="<?php echo $row['id_c']; ?>"><?php echo $row['name']; ?></option>
            <?php
            }
              ?>
            </select>

        </div>
        <div class="input-group">
            <span class="input-group-text">With textarea</span>
            <textarea name="description"  class="form-control" aria-label="With textarea"> <?php echo $prodact['description']?></textarea> <br>

        </div>
        <div id="btnadd" class="input-group">
            <button id="btnSubAdd" class="btn btn-dark" name="submit" type="submit">Subbmit</button>
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