<!Doctype html>
<html>
<title>Document</title>
<link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
include('header.php');
?>
  </header>
  <body>
 

     <h1 class="titre">CARNET DE SANTE</h1>
     <?php
      if(isset($_GET['rep']))
      {
        echo '<h5>'.$_GET['rep'].'</h5>';
      }
     ?>
      <section class=" row justify-content-center">
     <section class="bloc1 col-md-9 mt-3 row justify-content-around ">
     <div class="col-md-6 mt-3 mb-3 row justify-content-end">
     <a href="formulaire.php" type="button" class="btn col-md-6 ombre m-2" style="background-color:#4b68b1" >
     <section class="bouton1"> <h1>Nouveau<br> vaccin</h1></section>
     </a>
    </div>

    <div class="col-md-6 mt-3 mb-3 row">
     <a href="liste.php" class="btn btn-light col-md-6  ombre m-2" type="button"> 
     <section class="bouton2"><h1>Liste.php<br>  <br>vaccin</h1></section>
     </a>
     </div>
     </section>
     </section>
     <?php
            require('footer.php')
        ?>
  </body>
</html>