<?php 
session_start();
require "conction.php";
$id=$_GET['id'];
$qury ="DELETE FROM `product` WHERE id=$id";
$qury_run=mysqli_query($conn,$qury);
if($qury_run){
    $_SESSION['messge']="Successfully delted";
    header("Location:data.php");
}
else{
    $_SESSION['messge']="Prodact Not  delted";
    header("Location:data.php");
   
}

?>