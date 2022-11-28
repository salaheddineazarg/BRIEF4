<?php
  session_start();
  require 'conction.php';
  if(isset($_SESSION['messge'])):
    ?>
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Holy !</strong><?php echo $_SESSION['messge']; ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php 
      
      unset($_SESSION['messge']);
      endif;
      
      ?>
