<?php
if(isset($_SESSION['nom_prenom']))
{
  $nom=$_SESSION['nom_prenom'];
}else{
  $nom="Non connecter";
}
?>
<!Doctype html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>GESTION DES MOTO</title>
    
  </head>
  <body>
  <div class="contenair">
    <section class=".mainrow row h-100 ml-0 mr-0">
      <aside class="as col-md-1 bg-info p-0">
        <ul class="p-3">
        <li class="mt-5 li "><a class=" menu-item fa fa-home d-flex flex-column justify-content-center" href="index.php?page=accueil"></a></li>
          <li class="mt-5 li "><a class=" menu-item fa fa-plus d-flex flex-column justify-content-center" href="index.php?page=ins_up"></a></li>
          <li class="mt-5 li "><a class=" menu-item fa fa-motorcycle d-flex flex-column justify-content-center" href="index.php?page=liste"></a></li>
          <li class="mt-5 li "><a class=" menu-item fa fa-sign-out d-flex flex-column justify-content-center" href="index.php?page=accueil&deconnect=''"></a></li>
        </ul>
      </aside>
      <section class=" sect col-md-11 p-0">
        <header class="d-flex justify-content-end p-3 bg-danger">
          <h4><?php echo $_SESSION["nom"]; ?></h4>
        </header>
        <div class="p-3 h-100">
          <?php require($contenu);?>
        </di>
      </section>
    </section>
  </div>
  </body>
</html>