<div class="row justify-content-around">
  <section class="col-md-5 accueil-nb">
  <div>MOTOS EN STOCK</div>
     <b><?php echo $stock; ?></b>
  </section>
  <section class="col-md-5 accueil-nb ">
  <div>MOTOS VENDUES</div>
  <b><?php echo $vendu; ?></b>
  </section>
</div>

<div class="row pass">
<form class="form m-3" action="" method="post">
   <h4>Changer le mot de passe</h4>
<input class="form-control mt-2" type="password"placeholder="Saisissez votre mot de passe" name="pass">
<input class="form-control mt-2" type="password"placeholder="confirmer le mot de passe" name="passconfirm">
<input class="form-control mt-2" type="submit" value="changer">
</form>
</div>