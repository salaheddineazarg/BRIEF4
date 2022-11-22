<script>
  const filter = document.getElementById('filter').value;
  location.replace('lien?' + filter);
</script>
<?php
require 'conction.php';

$data = mysqli_query($conn, "SELECT * FROM `product` WHERE id_c=");
$dataca = mysqli_query($conn, "SELECT * FROM `category` WHERE 1");
?>
<div class="contt">
  <div class="continer_cards row">
    <?php
    foreach ($data as $row) {
    ?>
      <div class="card" style="width: 18rem;">
        <img id="myimg" src="img/<?php echo $row['image']; ?>" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['name'] ?></h5>
          <p class="card-text"> <?php echo $row['description']; ?></p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">update</a>
          <a href="#" class="card-link">Delete</a>
        </div>
      </div>
    <?php
    }
    ?>