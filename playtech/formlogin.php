
<?php
 session_start();
require 'conction.php';

if(isset($_POST['submitlogin'])){

    $emaillogin=htmlspecialchars(trim(strtolower($_POST['emaillogin'])));
    $passwordlogin=md5($_POST['passwordlogin']);
    $_query="SELECT * FROM `admin` WHERE  email = '$emaillogin' && password = '$passwordlogin' ";
    if(mysqli_num_rows(mysqli_query($conn,$_query))>0) {
      $_SESSION['email']=$emaillogin;
      header("Location: data.php");
    
    }
    else{
      
     echo " <script> alert('Your password is not correct')</script>";
   
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
  <link href="bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive.css">
  <!-- JavaScript Bundle with Popper -->
  <script defer src="js.js"></script>
</head>
<body class="body">

<form class="form" action="login.php" method="POST">
   <div class="mb-3 text-center">
     <label for="exampleInputEmail1" style="font-family: 'inter';" class="form-label">Email address</label>
     <input type="email" name="emaillogin" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     <div id="emailHelp" style="font-family: 'inter';" class="form-text">We'll never share your email with anyone else.</div>
   </div>
   <div class="mb-3 text-center">
     <label for="exampleInputPassword1" style="font-family: 'inter';" class="form-label">Password</label>
     <input type="password" style="font-family: 'inter';" name="passwordlogin" class="form-control" id="exampleInputPassword1">
   </div>
  
   <button type="submit" name="submitlogin" class="btn  btn-primary">Submit</button>
   </form>
 

</body>
</html>
 


 


