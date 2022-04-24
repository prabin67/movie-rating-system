<?php
require 'views/Critic/criticdashboard.php';
?>

<base href="/movie/">

 <body class="container-fluid">
<div class= "row container-flex">
<?php
      while($row = $this->result->fetch_assoc()){
    ?>
  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col mt-3">
    <div class="card m-auto mt-2">
      <img class="card-img-top" src="images/movies/<?= $row['mimage']?>" alt="Card image cap" width="200px" height="200px">
      <div class="card-body">
        <h5 class="card-title"><?= $row['mname']?></h5>
        <h5 class="card-text"> <?= $row['myear']?></h5>
      <a href="Critic/Addc?mid=<?=$row["mid"]?>" class="btn btn-primary">view</a>
      
      </div>
    </div>
  </div>
  <?php } ?>
</div>
</body>
