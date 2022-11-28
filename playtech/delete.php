<?php 
session_start();
require "conction.php";
$id=$_GET['id'];
$query ="DELETE FROM `product` WHERE id=$id";
$query_run=mysqli_query($conn,$query);
if($query_run){
    $_SESSION['messge']="Successfully delted";
    header("Location:data.php");
}
else{
    $_SESSION['messge']="Prodact Not  delted";
    header("Location:data.php");
   
}

?>