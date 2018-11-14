<?php
include_once('controller/conexao.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <style>
    /* Make the image fully responsive */
    .carousel-inner img {
      width: 500px;
      height: 500px;
    }
  </style>
</head>

<body style="background-color:black;">

  <div id="demo" class="carousel slide" data-ride="carousel">



    <!-- indicadores -->
    <ul class="carousel-indicators">
      <?php
      $controle_ativo=2;
      $controle_num_slide = 1;
  $result_corousel ="SELECT*FROM carrouses ORDER BY id ASC";
$resultado_carousel = mysqli_query($conexao,$result_corousel);
while($row_carousel = mysqli_fetch_assoc($resultado_carousel))
{
  if($controle_ativo ==2)
  { ?>

      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <?php
      
      $controle_ativo =1;
}else{?>
      <li data-target="#demo" data-slide-to="<?php echo $controle_num_slide; ?>"></li>
      <?php
      $controle_num_slide++;
}
 }
?>    
      
      <li data-target="#demo" data-slide-to="2"></li>

    </ul>


<!--=======================================================================================-->


    <!-- The slideshow -->
    <div class="carousel-inner">

      <?php
      $controle_ativo=2;
  $result_corousel ="SELECT*FROM carrouses ORDER BY id ASC";
$resultado_carousel = mysqli_query($conexao,$result_corousel);
while($row_carousel = mysqli_fetch_assoc($resultado_carousel))
{
  if($controle_ativo ==2)
  { ?>

      <div class="carousel-item active">
        <img src="img/<?php echo $row_carousel['imagen_carousel'];?>" alt="<?php echo $row_carousel['nome'];?>" title="<?php echo $row_carousel['nome'];?>">
      </div>
      <?php
      
      $controle_ativo =1;
}else{?>
      <div class="carousel-item">
        <img src="img/<?php echo $row_carousel['imagen_carousel']; ?>" class="img-thumbnail" alt="<?php echo $row_carousel['nome'];?>" title="<?php echo $row_carousel['nome'];?>">
      </div>
      <?php
}
  
}
?>

      <div class="carousel-item">
        <img src="img/megan.jpg" class="img-thumbnail" alt="New York" title="Mia Khalifa">
      </div>
      <div class="carousel-item">
        <img src="img/scarlet.jpg" class="img-thumbnail" alt="New York" title="Scarlet Johansson">
      </div>
      <div class="carousel-item">
        <img src="img/liv.jpg" class="img-thumbnail" alt="New York" title="Liv Tayler">
      </div>
    </div>




    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

</body>

</html>