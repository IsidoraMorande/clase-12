<?php include('cabeza.php')?>

<div class="container">
  <div class="row">
    <div class="col-12">

    <h1><?php print $title;?></h1>
        
    <h3><?php print basename($_SERVER['PHP_SELF']);?></h3>


  <form action="quinta.php" method="post">
 <p>Su nombre: <input type="text" name="nombre" /></p>
 <p><input type="submit" /></p>
</form>

      <img src="https://raw.githubusercontent.com/IsidoraMorande/ev2/gh-pages/img/trabajo-1.jpg"><?php print (rand(1,3));?>
    </div>
  </div>
</div>

  <?php include('patas.php')?>



