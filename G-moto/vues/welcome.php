<!Doctype html>
<html>
  <header>
  <meta charset='utf-8'>
  <title>gestion</title>
  <link rel="stylesheet" href="../style/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</headerd>
<body>
        <div class="card-header">
         
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- <a class="nav-link active" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                      <a class="nav-link active" href="index.php?page=welcome">welcome</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href=index.php?page=formulaire>Nouvel Enregistrement</a> href=></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href=index.php?page=liste>Liste des motos</a>
                    
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Recherche" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
              </form>
            </div>
          </nav>
        </div>
        <section class=" sect col-md-11 p-0">
        <header class="d-flex justify-content-end p-3 bg-danger">
          <h4><?php echo $_SESSION["nom"]; ?></h4>
        </header>
       <div class="col-sm-6"><img src="../Style/img/moto.jpg" width="80%"class="img-fluid" alt="Responsive image"></div><br>
  
       <div class="card-footer text-muted">
 <h3> Copyright © 2020 Simplon.co, Burkina</h3>
  </div>
          