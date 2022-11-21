<?php
session_start();
require 'conction.php';
$dataca = mysqli_query($conn, "SELECT * FROM `category` WHERE 1");
if(isset($_POST['submit'])){
    $name=htmlspecialchars($_POST['name']);
    $prix=htmlspecialchars($_POST['prix']);
    $Category=htmlspecialchars($_POST['Category']);
    $description=htmlspecialchars($_POST['description']);
    if($_FILES["image"]["error"] === 4){
        echo 
        "<script>alert('Image Dose Note Exist');</script>";
    }
    else{
        $FileName=$_FILES["image"]["name"];
        $tmpName=$_FILES["image"]["tmp_name"];
        $validExtisin=['jpg','jpeg','png'];
        $imageEx=explode('.',$FileName);
        $imageEx=strtolower(end($imageEx));
        if(! in_array($imageEx,$validExtisin)){
            echo 
            "<script>alert('Invalid  Image Extension');</script>";
        }
        else{
            $newImageName=uniqid();
            $newImageName.='.'. $imageEx;
            move_uploaded_file($tmpName,'img/'.$newImageName);
           $qury="INSERT INTO `product`(`name`, `description`, `prix`, `id_c`, `image`) VALUES ('$name','$description',$prix,$Category,'$newImageName')";
           // $qury="INSERT INTO `product`(`name`, `description`, `prix`, `id_c`, `image`) VALUES ('$name','$description',$prix,$Category,$newImageName)";
            $qury_runn= mysqli_query($conn,$qury);
            if($qury_runn){
              $_SESSION['messge']="Successfully ";
              header("Location:data.php");
            }
            else{
             $_SESSION['messge']="Prodact not add";
             header("Location:data.php");
            }
          

        }

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
    <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    
<title>add prodact</title>
</head>
<body>
<form id="fadd" method="POST" autocomplete="off" enctype="multipart/form-data" >
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Name</span>
  <input   name="name" type="text" class="form-control" placeholder="name" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <input  name="prix" type="text" class="form-control" placeholder="Prix" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-text" id="basic-addon2">Prix</span>
</div>


<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">IMAGE</span>
  <input  accept=".jpg,jpeg,.png" name="image" type="file" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
<span class="input-group-text">category</span>
<select name="Category" class="form-control" name="" id="">
    <?php foreach($dataca as $row){?>
          <option value="<?php echo $row['id_c']; ?>"><?php echo $row['name']; ?></option>
          <?php
            } 
          ?>
    <option value="12">play </option>

</select>

</div>
<div class="input-group">
  <span class="input-group-text">With textarea</span>
  <textarea  name="description" class="form-control" aria-label="With textarea"></textarea><br>

</div>
<div id="btnadd" class="input-group">
    <button id="btnSubAdd" class="btn btn-dark" name="submit" type="submit" >Submit</button>
 </div>
</form>

</body>

</html>