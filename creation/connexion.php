<?php
   try{
      $pdo=new PDO("mysql:host=localhost;dbname=bdcrea","root","");
   }
   catch(PDOException $e){
      echo $e->getMessage();
   }
?>