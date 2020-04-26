 <!Doctype html>
<html>
  <header>
  <meta charset='utf-8'>
  <title></title>
  <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

<?php
  include('header.php');
include('class_vacci.php');




$vaccin=new Vaccin();
if(isset($_GET['id'])){
  $one=$vaccin->get($_GET['id']);
}
function val($ct){
    if($ct!=""){

        echo $ct;
    }
}

function check($a,$b){
  if($a==$b){
    echo 'checked';
  }
}

function select($a,$b){
  if($a==$b){
    echo 'selected';
  }
}
?>
<div class="card text-center">
        >
        <form method="post" action="modifier.php" enctype="multipart/form-data" data-toggle="validator" id="frm">
        <h2>Informations du patients</h2> <br>
                  <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">id</label>
                            <input type="text" name="id" class="form-control"  id="inputid" hidden value="<?php val($one['id'])?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">pseudo</label>
                            <input type="text" name="id" class="form-control"  id="inputid"  value="<?php val($one['pseudo'])?>">
                        </div>
                        
                       
                       <div class="form-group col-md-6">
                           <label for="inputPassword4">messag</label>
                           <input type="text" name="mess" class="form-control" id="inputmessag"  value="<?php val($one['messag'])?>">
                       </div>
                  </div>
                  </form>

                  <br> <br> <br>
                  <div>
                  <input type="submit" class="btn btn-success m-2" value="Mettre a jour">
                  <input type="reset" class="btn btn-danger m-2" value="Reinitialiser">
                  </div>
            <br><br><br>
           
    </div> 
</body>
</html>